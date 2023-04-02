<?php

namespace App\Command;

use App\Entity\Metro;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Finder\Finder;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use PDO;

#[AsCommand(
    name: 'csv:import:metro',
    description: 'Import CSV Data File For Metro Table',
)]
class  CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * CsvImportCommand constructor.
     *
     * @param EntityManagerInterface $em
     *
     * @throws \Symfony\Component\Console\Exception\LogicException
     */
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();

        $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        //$csv = $this->csvToArray();
        $this->parseCSV();

        $io->success('Command exited cleanly!');
    }

    /**
     * Parse a csv file
     *
     * @return array
     */
    private function parseCSV()
    {
        //$conn = $this->em->getConnection();
        //$sql = "INSERT INTO `metro` (`id`, `geo_point`, `geo_shape`, `objet_id`, `id_ref_zdl`, `gare_id`, `nom_gare`, `nom_long`, `nom_iv`, `nom_mod`, `mode`, `fer`, `train`, `rer`, `metro`, `tramway`, `navette`, `val`, `terfer`, `tertrain`, `terrer`, `termetro`, `tertram`, `ternavette`, `terval`, `idrefliga`, `idrefligc`, `ligne`, `code_lignf`, `ligne_code`, `indice_lig`, `reseau`, `res_com`, `cod_resf`, `res_stif`, `exploitant`, `num_psr`, `idf`, `principal`, `x`, `y`) VALUES (:id, :geo_point, :geo_shape, :objet_id, :id_ref_zdl, :gare_id, :nom_gare, :nom_long, :nom_iv, :nom_mod, :mode, :fer, :train, :rer, :metro, :tramway, :navette, :val, :terfer, :tertrain, :terrer, :termetro, :tertram, :ternavette, :terval, :idrefliga, :idrefligc, :ligne, :code_lignf, :ligne_code, :indice_lig, :reseau, :res_com, :cod_resf, :res_stif, :exploitant, :num_psr, :idf, :principal, :x, :y)";
        //$sth = $conn->prepare($sql);

        $csv = Reader::createFromPath('%kernel.root_dir%/../src/Data/metro.csv')->setHeaderOffset(0);

        foreach ($csv as $row) {
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
    }


    public function csvToArray()
    {
        $path = '%kernel.root_dir%/../src/Data/metro.csv';

        $rows = [];
        $handle = fopen($path, "r");
        while (($row = fgetcsv($handle)) !== false) {
            $rows[] = $row;
        }
        fclose($handle);
        // Remove the first one that contains headers
        $headers = array_shift($rows);
        // Combine the headers with each following row
        $array = [];
        foreach ($rows as $row) {
            $array[] = array_merge($headers, $row);
        }
        var_dump($array);
    }
}
