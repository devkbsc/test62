<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Entity\Metro;
use Doctrine\Common\Annotations\Reader as AnnotationsReader;
use League\Csv\Reader;
use Symfony\Component\Finder\Finder;

#[AsCommand(
    name: 'csv:metro',
    description: 'Import CSV Data File For Metro Table',
)]
class CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $io = new SymfonyStyle($input, $output);

        //$csv = Reader::createFromPath('%kernel.root_dir%/../src/Data/metro.csv', 'r');
        // https://github.com/thephpleague/csv/issues/208
        //$results = $reader->fetchAssoc();

        var_dump($this->csvToarray());die;

        foreach ($csv as $row) {

            // create new athlete
            $metro = (new Metro())
                ->setgeoPoint($row['geo_point'])
                ->setGeoShape($row['geo_shape'])
                ->setObjetId($row['objet_id'])
                ->setIdRefZdl($row['id_ref_zdl'])
                ->setGareId($row['gare_id'])
                ->setNomIv($row['nom_gare'])
                ->setNomMod($row['nom_mod'])
                ->setMode($row['mode'])

                ->setFer($row['fer'])
                ->setTrain($row['train'])
                ->setRer($row['rer'])
                ->setMetro($row['metro'])
                ->setTramway($row['tramway'])
                ->setNavette($row['navette'])
                ->setVal($row['val'])
                ->setTerfer($row['terfer'])
                ->setTertrain($row['tertrain'])
                ->setTerrer($row['terrer'])
                ->setTermetro($row['termetro'])

                ->setTertram($row['tertram'])
                ->setTernavette($row['ternavette'])
                ->setTerval($row['terval'])
                ->setIdrefliga($row['idrefliga'])
                ->setIdrefligc($row['idrefligc'])
                ->setLigne($row['ligne'])
                ->setCodeLignf($row['code_lignf'])
                ->setLigneCode($row['ligne_code'])
                ->setIndiceLig($row['indice_lig'])
                ->setReseau($row['reseau'])
                ->setResCom($row['res_com'])
                ->setCodResf($row['cod_resf'])

                ->setResStif($row['res_stif'])
                ->setExploitant($row['exploitant'])
                ->setNumPsr($row['num_psr'])
                ->setIdf($row['idf'])
                ->setPrincipal($row['principal'])
                ->setX($row['x'])
                ->setY($row['y']);

            $this->em->persist($metro);
        }

        $this->em->flush();

        $io->success('Command exited cleanly!');
    }


    
}
