<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use League\Csv\Reader;
use App\Entity\Metro;
use Doctrine\ORM\EntityManagerInterface;

#[AsCommand(
    name: 'csv:import:metro',
    description: 'Import CSV Data File For Metro Table',
)]
class CsvImportMetroCommand extends Command
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

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $metro = new Metro();
        

        return $output;
    }

    // protected function execute(InputInterface $input, OutputInterface $output)
    // {
    //     // Show when the script is launched
    //     $now = new \DateTime();
    //     $output->writeln('<comment>Start : ' . $now->format('d-m-Y G:i:s') . ' ---</comment>');

    //     // Import CSV on DB via Doctrine ORM
    //     $this->import($input, $output);

    //     // Show when the script is over
    //     $now = new \DateTime();
    //     $output->writeln('<comment>End : ' . $now->format('d-m-Y G:i:s') . ' ---</comment>');
    // }


    // protected function import(InputInterface $input, OutputInterface $output)
    // {
    //   $em = $this->em->getManager();

    //   // Turning off doctrine default logs queries for saving memory
    //   $em->getConnection()->getConfiguration()->setSQLLogger(null);

    //   // Get php array of data from CSV
    //   $data = $this->getData();

    //   // Start progress
    //   $size = count($data);
    //   $progress = new ProgressBar($output, $size);
    //   $progress->start();

    //   // Processing on each row of data
    //   $batchSize = 100; # frequency for persisting the data
    //   $i = 1;               # current index of records

    //   foreach($data as $row) {
    //      $p = $em->getRepository('AppBundle:Prescriber')->findOneBy(array(
    //             'rpps'       => $row['rpps'],
    //             'lastname'   => $row['nom'],
    //             'firstname'  => $row['prenom'],
    //             'profCode'   => $row['code_prof'],
    //             'postalCode' => $row['code_postal'],
    //             'city'       => $row['ville'],
    //      ));

    //      # If the prescriber doest not exist we create one
    //      if(!is_object($p)){
    //         $p = new Prescriber();
    //         $p->setRpps($row['rpps']);
    //         $p->setLastname($row['nom']);
    //         $p->setFirstname($row['prenom']);
    //         $p->setProfCode($row['code_prof']);
    //         $p->setPostalCode($row['code_postal']);
    //         $p->setCity($row['ville']);
    //         $em->persist($p);
    //      }    

    //      # flush each 100 prescribers persisted
    //      if (($i % $batchSize) === 0) {
    //         $em->flush();
    //         $em->clear();   // Detaches all objects from Doctrine!

    //         // Advancing for progress display on console
    //         $progress->advance($batchSize);
    //         $progress->display();
    //      }
    //      $i++;
    //   }

    //   // Flushing and clear data on queue
    //   $em->flush();
    //   $em->clear();

    //   // Ending the progress bar process
    //   $progress->finish();
    // }







    // protected function import(InputInterface $input, OutputInterface $output): int
    // {
    //     $io = new SymfonyStyle($input, $output);

    //     $csv = Reader::createFromPath('%kernel.root_dir%/../src/Data/metro.csv');
    //     // https://github.com/thephpleague/csv/issues/208
    //     //$results = $reader->fetchAssoc();
    //     //$csv = Reader::createFromPath('/path/to/your/csv/file.csv')->setHeaderOffset(0);

    //     foreach ($csv as $row) {

    //         // create new athlete
    //         $metro = (new Metro())
    //             ->setgeoPoint($row['geo_point'])
    //             ->setGeoShape($row['geo_shape'])
    //             ->setObjetId($row['objet_id'])
    //             ->setIdRefZdl($row['id_ref_zdl'])
    //             ->setGareId($row['gare_id'])
    //             ->setNomIv($row['nom_gare'])
    //             ->setNomMod($row['nom_mod'])
    //             ->setMode($row['mode'])

    //             ->setFer($row['fer'])
    //             ->setTrain($row['train'])
    //             ->setRer($row['rer'])
    //             ->setMetro($row['metro'])
    //             ->setTramway($row['tramway'])
    //             ->setNavette($row['navette'])
    //             ->setVal($row['val'])
    //             ->setTerfer($row['terfer'])
    //             ->setTertrain($row['tertrain'])
    //             ->setTerrer($row['terrer'])
    //             ->setTermetro($row['termetro'])

    //             ->setTertram($row['tertram'])
    //             ->setTernavette($row['ternavette'])
    //             ->setTerval($row['terval'])
    //             ->setIdrefliga($row['idrefliga'])
    //             ->setIdrefligc($row['idrefligc'])
    //             ->setLigne($row['ligne'])
    //             ->setCodeLignf($row['code_lignf'])
    //             ->setLigneCode($row['ligne_code'])
    //             ->setIndiceLig($row['indice_lig'])
    //             ->setReseau($row['reseau'])
    //             ->setResCom($row['res_com'])
    //             ->setCodResf($row['cod_resf'])

    //             ->setResStif($row['res_stif'])
    //             ->setExploitant($row['exploitant'])
    //             ->setNumPsr($row['num_psr'])
    //             ->setIdf($row['idf'])
    //             ->setPrincipal($row['principal'])
    //             ->setX($row['x'])
    //             ->setY($row['y'])
    //         ;

    //         $this->em->persist($metro);
    //     }

    //     $this->em->flush();

    //     $io->success('Command exited cleanly!');

    // }
}
