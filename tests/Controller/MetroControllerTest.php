<?php

namespace App\Test\Controller;

use App\Entity\Metro;
use App\Repository\MetroRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MetroControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private MetroRepository $repository;
    private string $path = '/metro/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Metro::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Metro index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'metro[geoPoint]' => 'Testing',
            'metro[geoShape]' => 'Testing',
            'metro[objetId]' => 'Testing',
            'metro[idRefZdl]' => 'Testing',
            'metro[gareId]' => 'Testing',
            'metro[nomGare]' => 'Testing',
            'metro[nomLong]' => 'Testing',
            'metro[nomIv]' => 'Testing',
            'metro[nomMod]' => 'Testing',
            'metro[mode]' => 'Testing',
            'metro[fer]' => 'Testing',
            'metro[train]' => 'Testing',
            'metro[rer]' => 'Testing',
            'metro[metro]' => 'Testing',
            'metro[tramway]' => 'Testing',
            'metro[navette]' => 'Testing',
            'metro[val]' => 'Testing',
            'metro[terfer]' => 'Testing',
            'metro[tertrain]' => 'Testing',
            'metro[terrer]' => 'Testing',
            'metro[termetro]' => 'Testing',
            'metro[tertram]' => 'Testing',
            'metro[ternavette]' => 'Testing',
            'metro[terval]' => 'Testing',
            'metro[idrefliga]' => 'Testing',
            'metro[idrefligc]' => 'Testing',
            'metro[ligne]' => 'Testing',
            'metro[codeLignf]' => 'Testing',
            'metro[ligneCode]' => 'Testing',
            'metro[indiceLig]' => 'Testing',
            'metro[reseau]' => 'Testing',
            'metro[resCom]' => 'Testing',
            'metro[codResf]' => 'Testing',
            'metro[resStif]' => 'Testing',
            'metro[exploitant]' => 'Testing',
            'metro[numPsr]' => 'Testing',
            'metro[idf]' => 'Testing',
            'metro[principal]' => 'Testing',
            'metro[x]' => 'Testing',
            'metro[y]' => 'Testing',
        ]);

        self::assertResponseRedirects('/metro/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Metro();
        $fixture->setGeoPoint('My Title');
        $fixture->setGeoShape('My Title');
        $fixture->setObjetId('My Title');
        $fixture->setIdRefZdl('My Title');
        $fixture->setGareId('My Title');
        $fixture->setNomGare('My Title');
        $fixture->setNomLong('My Title');
        $fixture->setNomIv('My Title');
        $fixture->setNomMod('My Title');
        $fixture->setMode('My Title');
        $fixture->setFer('My Title');
        $fixture->setTrain('My Title');
        $fixture->setRer('My Title');
        $fixture->setMetro('My Title');
        $fixture->setTramway('My Title');
        $fixture->setNavette('My Title');
        $fixture->setVal('My Title');
        $fixture->setTerfer('My Title');
        $fixture->setTertrain('My Title');
        $fixture->setTerrer('My Title');
        $fixture->setTermetro('My Title');
        $fixture->setTertram('My Title');
        $fixture->setTernavette('My Title');
        $fixture->setTerval('My Title');
        $fixture->setIdrefliga('My Title');
        $fixture->setIdrefligc('My Title');
        $fixture->setLigne('My Title');
        $fixture->setCodeLignf('My Title');
        $fixture->setLigneCode('My Title');
        $fixture->setIndiceLig('My Title');
        $fixture->setReseau('My Title');
        $fixture->setResCom('My Title');
        $fixture->setCodResf('My Title');
        $fixture->setResStif('My Title');
        $fixture->setExploitant('My Title');
        $fixture->setNumPsr('My Title');
        $fixture->setIdf('My Title');
        $fixture->setPrincipal('My Title');
        $fixture->setX('My Title');
        $fixture->setY('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Metro');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Metro();
        $fixture->setGeoPoint('My Title');
        $fixture->setGeoShape('My Title');
        $fixture->setObjetId('My Title');
        $fixture->setIdRefZdl('My Title');
        $fixture->setGareId('My Title');
        $fixture->setNomGare('My Title');
        $fixture->setNomLong('My Title');
        $fixture->setNomIv('My Title');
        $fixture->setNomMod('My Title');
        $fixture->setMode('My Title');
        $fixture->setFer('My Title');
        $fixture->setTrain('My Title');
        $fixture->setRer('My Title');
        $fixture->setMetro('My Title');
        $fixture->setTramway('My Title');
        $fixture->setNavette('My Title');
        $fixture->setVal('My Title');
        $fixture->setTerfer('My Title');
        $fixture->setTertrain('My Title');
        $fixture->setTerrer('My Title');
        $fixture->setTermetro('My Title');
        $fixture->setTertram('My Title');
        $fixture->setTernavette('My Title');
        $fixture->setTerval('My Title');
        $fixture->setIdrefliga('My Title');
        $fixture->setIdrefligc('My Title');
        $fixture->setLigne('My Title');
        $fixture->setCodeLignf('My Title');
        $fixture->setLigneCode('My Title');
        $fixture->setIndiceLig('My Title');
        $fixture->setReseau('My Title');
        $fixture->setResCom('My Title');
        $fixture->setCodResf('My Title');
        $fixture->setResStif('My Title');
        $fixture->setExploitant('My Title');
        $fixture->setNumPsr('My Title');
        $fixture->setIdf('My Title');
        $fixture->setPrincipal('My Title');
        $fixture->setX('My Title');
        $fixture->setY('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'metro[geoPoint]' => 'Something New',
            'metro[geoShape]' => 'Something New',
            'metro[objetId]' => 'Something New',
            'metro[idRefZdl]' => 'Something New',
            'metro[gareId]' => 'Something New',
            'metro[nomGare]' => 'Something New',
            'metro[nomLong]' => 'Something New',
            'metro[nomIv]' => 'Something New',
            'metro[nomMod]' => 'Something New',
            'metro[mode]' => 'Something New',
            'metro[fer]' => 'Something New',
            'metro[train]' => 'Something New',
            'metro[rer]' => 'Something New',
            'metro[metro]' => 'Something New',
            'metro[tramway]' => 'Something New',
            'metro[navette]' => 'Something New',
            'metro[val]' => 'Something New',
            'metro[terfer]' => 'Something New',
            'metro[tertrain]' => 'Something New',
            'metro[terrer]' => 'Something New',
            'metro[termetro]' => 'Something New',
            'metro[tertram]' => 'Something New',
            'metro[ternavette]' => 'Something New',
            'metro[terval]' => 'Something New',
            'metro[idrefliga]' => 'Something New',
            'metro[idrefligc]' => 'Something New',
            'metro[ligne]' => 'Something New',
            'metro[codeLignf]' => 'Something New',
            'metro[ligneCode]' => 'Something New',
            'metro[indiceLig]' => 'Something New',
            'metro[reseau]' => 'Something New',
            'metro[resCom]' => 'Something New',
            'metro[codResf]' => 'Something New',
            'metro[resStif]' => 'Something New',
            'metro[exploitant]' => 'Something New',
            'metro[numPsr]' => 'Something New',
            'metro[idf]' => 'Something New',
            'metro[principal]' => 'Something New',
            'metro[x]' => 'Something New',
            'metro[y]' => 'Something New',
        ]);

        self::assertResponseRedirects('/metro/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getGeoPoint());
        self::assertSame('Something New', $fixture[0]->getGeoShape());
        self::assertSame('Something New', $fixture[0]->getObjetId());
        self::assertSame('Something New', $fixture[0]->getIdRefZdl());
        self::assertSame('Something New', $fixture[0]->getGareId());
        self::assertSame('Something New', $fixture[0]->getNomGare());
        self::assertSame('Something New', $fixture[0]->getNomLong());
        self::assertSame('Something New', $fixture[0]->getNomIv());
        self::assertSame('Something New', $fixture[0]->getNomMod());
        self::assertSame('Something New', $fixture[0]->getMode());
        self::assertSame('Something New', $fixture[0]->getFer());
        self::assertSame('Something New', $fixture[0]->getTrain());
        self::assertSame('Something New', $fixture[0]->getRer());
        self::assertSame('Something New', $fixture[0]->getMetro());
        self::assertSame('Something New', $fixture[0]->getTramway());
        self::assertSame('Something New', $fixture[0]->getNavette());
        self::assertSame('Something New', $fixture[0]->getVal());
        self::assertSame('Something New', $fixture[0]->getTerfer());
        self::assertSame('Something New', $fixture[0]->getTertrain());
        self::assertSame('Something New', $fixture[0]->getTerrer());
        self::assertSame('Something New', $fixture[0]->getTermetro());
        self::assertSame('Something New', $fixture[0]->getTertram());
        self::assertSame('Something New', $fixture[0]->getTernavette());
        self::assertSame('Something New', $fixture[0]->getTerval());
        self::assertSame('Something New', $fixture[0]->getIdrefliga());
        self::assertSame('Something New', $fixture[0]->getIdrefligc());
        self::assertSame('Something New', $fixture[0]->getLigne());
        self::assertSame('Something New', $fixture[0]->getCodeLignf());
        self::assertSame('Something New', $fixture[0]->getLigneCode());
        self::assertSame('Something New', $fixture[0]->getIndiceLig());
        self::assertSame('Something New', $fixture[0]->getReseau());
        self::assertSame('Something New', $fixture[0]->getResCom());
        self::assertSame('Something New', $fixture[0]->getCodResf());
        self::assertSame('Something New', $fixture[0]->getResStif());
        self::assertSame('Something New', $fixture[0]->getExploitant());
        self::assertSame('Something New', $fixture[0]->getNumPsr());
        self::assertSame('Something New', $fixture[0]->getIdf());
        self::assertSame('Something New', $fixture[0]->getPrincipal());
        self::assertSame('Something New', $fixture[0]->getX());
        self::assertSame('Something New', $fixture[0]->getY());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Metro();
        $fixture->setGeoPoint('My Title');
        $fixture->setGeoShape('My Title');
        $fixture->setObjetId('My Title');
        $fixture->setIdRefZdl('My Title');
        $fixture->setGareId('My Title');
        $fixture->setNomGare('My Title');
        $fixture->setNomLong('My Title');
        $fixture->setNomIv('My Title');
        $fixture->setNomMod('My Title');
        $fixture->setMode('My Title');
        $fixture->setFer('My Title');
        $fixture->setTrain('My Title');
        $fixture->setRer('My Title');
        $fixture->setMetro('My Title');
        $fixture->setTramway('My Title');
        $fixture->setNavette('My Title');
        $fixture->setVal('My Title');
        $fixture->setTerfer('My Title');
        $fixture->setTertrain('My Title');
        $fixture->setTerrer('My Title');
        $fixture->setTermetro('My Title');
        $fixture->setTertram('My Title');
        $fixture->setTernavette('My Title');
        $fixture->setTerval('My Title');
        $fixture->setIdrefliga('My Title');
        $fixture->setIdrefligc('My Title');
        $fixture->setLigne('My Title');
        $fixture->setCodeLignf('My Title');
        $fixture->setLigneCode('My Title');
        $fixture->setIndiceLig('My Title');
        $fixture->setReseau('My Title');
        $fixture->setResCom('My Title');
        $fixture->setCodResf('My Title');
        $fixture->setResStif('My Title');
        $fixture->setExploitant('My Title');
        $fixture->setNumPsr('My Title');
        $fixture->setIdf('My Title');
        $fixture->setPrincipal('My Title');
        $fixture->setX('My Title');
        $fixture->setY('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/metro/');
    }
}
