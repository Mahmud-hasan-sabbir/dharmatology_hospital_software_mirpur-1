<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * KEY : MULTIPERMISSION
     */
    public function run(): void
    {
        $complaints = [
            ['name' => 'Fever'],
            ['name' => 'Shortness of Breath'],
            ['name' => 'Vomiting'],
            ['name' => 'Nausea'],
            ['name' => 'Fatigue'],
            ['name' => 'Headache'],
            ['name' => 'Chest Burn'],
            ['name' => 'Nerve Pain'],
            ['name' => 'Lymph Nodes'],
            ['name' => 'Blurry Vision'],
            ['name' => 'Eye Pain'],
            ['name' => 'Watery Eyes'],
            ['name' => 'Excessive Sweating'],
            ['name' => 'Joint Pain'],
            ['name' => 'Anxiety'],
            ['name' => 'Yellowish'],
            ['name' => 'Anguish'],
            ['name' => 'Constipation'],
            ['name' => 'Loose Motion'],
            ['name' => 'Excess Bleeding'],
            ['name' => 'Blocked Nose'],
            ['name' => 'Bloody Cough'],
            ['name' => 'Secretion'],
            ['name' => 'Excessive Thirst'],
            ['name' => 'Swelling'],
            ['name' => 'Numbness'],
            ['name' => 'Dizziness'],
            ['name' => 'High Blood Pressure'],
            ['name' => 'Low Blood Pressure'],
            ['name' => 'High Blood Sugar'],
            ['name' => 'Low Blood Sugar'],
            ['name' => 'Sleeplessness'],
            ['name' => 'Anemia'],
            ['name' => 'Difficulty to Stand'],
            ['name' => 'Difficulty to Sit/Lay'],
            ['name' => 'Difficulty to Talk'],
            ['name' => 'Depression'],
            ['name' => 'Suicidal'],
            ['name' => 'Imaginary Entity'],
            ['name' => 'Urinary Difficulty'],
            ['name' => 'Dry Cough'],
            ['name' => 'Mucas Cough'],
            ['name' => 'Cyst'],
            ['name' => 'Bloody Urine']
        ];
        
        // Insert into database
        DB::table('mast_complaints')->insert($complaints);

        /**
         * 
         * 
         * 
         */

         $tests = [
            ['test_name' => 'CBC  (Complete Blood Count)'],
            ['test_name' => 'LP (Lipid Panel/Profile)'],
            ['test_name' => 'RBS (Random Blood Sugar - Fasting)'],
            ['test_name' => 'TFT/ (Thyroid Function Test)'],
            ['test_name' => 'S-Cretanine (Kidney/Renal Function Test)'],
            ['test_name' => 'Urine Examination'],
            ['test_name' => 'X-Ray (Radiology)'],
            ['test_name' => 'MRI (Magnetic Resonance Imaging)'],
            ['test_name' => 'CT (Computed Tomography)'],
            ['test_name' => 'Genetic Testing'],
            ['test_name' => 'Stool Examination'],
            ['test_name' => 'Dermatology'],
            ['test_name' => 'Sperm Count Test (Potency Test)'],
            ['test_name' => 'ECG (Eco Cardiogram)'],
            ['test_name' => 'EGG (ElectroGastrogram)'],
            ['test_name' => 'Functionality Test'],
            ['test_name' => 'Physiotherapy'],
            ['test_name' => 'Audiotherapy'],
            ['test_name' => 'Covid-19 (Antigen)'],
            ['test_name' => 'Covid-19 (RT-PCR)'],
            ['test_name' => 'HIV Screening'],
            ['test_name' => 'HPV Screening'],
            ['test_name' => 'HbA'],
            ['test_name' => 'HbAg+'],
            ['test_name' => 'HbC'],
            ['test_name' => 'USG-A'],
            ['test_name' => 'USG-C'],
            ['test_name' => 'H1N1'],
            ['test_name' => 'ETT (Exercise Tolerance Test)'],
            ['test_name' => 'Angiogram'],
            ['test_name' => 'Mammography'],
            ['test_name' => 'Urography'],
            ['test_name' => 'PFT (Pulmonary Function Test)'],
            ['test_name' => 'MRS (Magnetic Resonance Spectography)'],
            ['test_name' => 'Prenatal/Pregnancy Test'],
            ['test_name' => 'Endoscopy'],
            ['test_name' => 'Cerebral Angiography'],
        ];

        DB::table('mast_tests')->insert($tests);


        /**
         * 
         * 
         * 
         */

         $organs = [
            ['organ_name' => 'Scalp'],
            ['organ_name' => 'Brain'],
            ['organ_name' => 'Forehead'],
            ['organ_name' => 'Eye (right)'],
            ['organ_name' => 'Eye (left)'],
            ['organ_name' => 'Nostril'],
            ['organ_name' => 'Ear (Right)'],
            ['organ_name' => 'Ear (Left)'],
            ['organ_name' => 'Lip (Upper)'],
            ['organ_name' => 'Lip (Lower)'],
            ['organ_name' => 'Tongue'],
            ['organ_name' => 'Tonsils'],
            ['organ_name' => 'Trachea/Airway'],
            ['organ_name' => 'Heart'],
            ['organ_name' => 'Lung (Right)'],
            ['organ_name' => 'Lung (Left)'],
            ['organ_name' => 'Intestine (Large)'],
            ['organ_name' => 'Intestine (Small)'],
            ['organ_name' => 'Kidney (Right)'],
            ['organ_name' => 'Kidney (Left)'],
            ['organ_name' => 'Thyroid Gland'],
            ['organ_name' => 'Appendix'],
            ['organ_name' => 'Bladder'],
            ['organ_name' => 'Pancreas'],
            ['organ_name' => 'Endocrine Systems'],
            ['organ_name' => 'Lymphatic'],
            ['organ_name' => 'Nerve/Nervous System'],
            ['organ_name' => 'Skeletal'],
            ['organ_name' => 'Anal'],
            ['organ_name' => 'Esophagus'],
            ['organ_name' => 'Penis'],
            ['organ_name' => 'Navel'],
            ['organ_name' => 'Vagina'],
            ['organ_name' => 'Hip Joint'],
            ['organ_name' => 'Anus'],
            ['organ_name' => 'Nails'],
            ['organ_name' => 'Skin'],
            ['organ_name' => 'Bone'],
            ['organ_name' => 'Hair'],
            ['organ_name' => 'Thigh (Upper)'],
            ['organ_name' => 'Thigh (Lower)'],
            ['organ_name' => 'Knee'],
            ['organ_name' => 'Buttocks'],
            ['organ_name' => 'Toe'],
            ['organ_name' => 'Finger(s) (Right Hand)'],
            ['organ_name' => 'Finger(s) (Left Hand)'],
            ['organ_name' => 'Finger(s) (Right Toe)'],
            ['organ_name' => 'Finger(s) (Left Toe)'],
            ['organ_name' => 'Ovary (Right)'],
            ['organ_name' => 'Ovary (Left)'],
            ['organ_name' => 'Breast (Right)'],
            ['organ_name' => 'Breast (Left)'],
            ['organ_name' => 'Testicle (Right)'],
            ['organ_name' => 'Testicle (Left)'],
        ];

        DB::table('mast_organs')->insert($organs);


        /**
         * 
         * 
         * 
         */
        $data = [
            ['name' => '5 mg'],
            ['name' => '10 mg'],
            ['name' => '20 mg'],
            ['name' => '25 mg'],
            ['name' => '40 mg'],
            ['name' => '50 mg'],
            ['name' => '60 mg'],
            ['name' => '70 mg'],
            ['name' => '75 mg'],
            ['name' => '80 mg'],
            ['name' => '100 mg'],
            ['name' => '120 mg'],
            ['name' => '150 mg'],
            ['name' => '180 mg'],
            ['name' => '200 mg'],
            ['name' => '250 mg'],
            ['name' => '300 mg'],
            ['name' => '350 mg'],
            ['name' => '400 mg'],
            ['name' => '450 mg'],
            ['name' => '500 mg'],
            ['name' => '600 mg'],
            ['name' => '700 mg'],
            ['name' => '800 mg'],
            ['name' => '1000 mg'],
            ['name' => '1200 mg'],
            ['name' => '1500 mg'],
            ['name' => '2000 mg'],
        ];

        DB::table('mast_powers')->insert($data);



        /***
         * 
         * 
         * 
         */

         $data = [
            ['name' => 'Capsule'],
            ['name' => 'Tablet'],
            ['name' => 'Ointment'],
            ['name' => 'Droplet'],
            ['name' => 'Saline (Oral)'],
            ['name' => 'Saline (IV)'],
            ['name' => 'Injection (IV)'],
            ['name' => 'Injection (IM)'],
            ['name' => 'Vaccination'],
            ['name' => 'Powder'],
            ['name' => 'Physiotherapy'],
            ['name' => 'Audiotherapy'],
            ['name' => 'Aromatherapy'],
            ['name' => 'Speech & Language Therapy'],
            ['name' => 'Occupational Therapy'],
            ['name' => 'Radiotherapy'],
            ['name' => 'Psychotherapy'],
            ['name' => 'Psycho Social Counselling'],
            ['name' => 'Couple Counselling'],
        ];

        DB::table('mast_equipment')->insert($data);
    }
}
