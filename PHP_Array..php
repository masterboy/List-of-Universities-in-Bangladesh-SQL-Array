<?php

/****
	Just run a foreach loop in $universities to process it inside your code.
	
	Array Stucture:-
	$universities = 
		[
			[
				"name" => "University Name",
				"type" => "Public/Private/International/Special"
			]
		];
		
		
		
	A possible implementation:-
		foreach ($universities as $u){
			echo $u["name"];
			echo $u["type"]
		}
****/


$universities = [
            ['name' => 'University of Dhaka','type' => 'Public'],['name' => 'University of Rajshahi','type' => 'Public'],['name' => 'Bangladesh Agricultural University','type' => 'Public'],['name' => 'Bangladesh University of Engineering & Technology','type' => 'Public'],['name' => 'University of Chittagong','type' => 'Public'],['name' => 'Jahangirnagar University','type' => 'Public'],['name' => 'Islamic University, Bangladesh','type' => 'Public'],['name' => 'Shahjalal University of Science and Technology','type' => 'Public'],['name' => 'Khulna University','type' => 'Public'],['name' => 'Bangabandhu Sheikh Mujib Medical University ','type' => 'Public'],['name' => 'Bangabandhu Sheikh Mujibur Rahman Agricultural University','type' => 'Public'],['name' => 'Hajee Mohammad Danesh Science & Technology University','type' => 'Public'],['name' => 'Mawlana Bhashani Science and Technology University','type' => 'Public'],['name' => 'Patuakhali Science and Technology University','type' => 'Public'],['name' => 'Sher-e-Bangla Agricultural University','type' => 'Public'],['name' => 'Dhaka University of Engineering & Technology','type' => 'Public'],['name' => 'Rajshahi University of Engineering & Technology','type' => 'Public'],['name' => 'Chittagong University of Engineering & Technology','type' => 'Public'],['name' => 'Khulna University of Engineering & Technology','type' => 'Public'],['name' => 'Jagannath University','type' => 'Public'],['name' => 'Jatiya Kabi Kazi Nazrul Islam University','type' => 'Public'],['name' => 'Chittagong Veterinary and Animal Sciences University','type' => 'Public'],['name' => 'Sylhet Agricultural University','type' => 'Public'],['name' => 'Comilla University','type' => 'Public'],['name' => 'Noakhali Science and Technology University','type' => 'Public'],['name' => 'Jessore University of Science & Technology','type' => 'Public'],['name' => 'Pabna University of Science and Technology','type' => 'Public'],['name' => 'Bangladesh University of Professionals','type' => 'Public'],['name' => 'Begum Rokeya University','type' => 'Public'],['name' => 'Bangladesh University of Textiles','type' => 'Public'],['name' => 'University of Barisal','type' => 'Public'],['name' => 'Bangabandhu Sheikh Mujibur Rahman Science and Technology University','type' => 'Public'],['name' => 'Islamic Arabic University','type' => 'Public'],['name' => 'Bangabandhu Sheikh Mujibur Rahman Maritime University','type' => 'Public'],['name' => 'Rangamati Science and Technology University','type' => 'Public'],['name' => 'Dhaka International University','type' => 'Private'],['name' => 'Ahsanullah University of Science and Technology','type' => 'Private'],['name' => 'BRAC University','type' => 'Private'],['name' => 'East West University','type' => 'Private'],['name' => 'North South University','type' => 'Private'],['name' => 'American International University-Bangladesh','type' => 'Private'],['name' => 'Independent University, Bangladesh','type' => 'Private'],['name' => 'Bangladesh University of Business and Technology','type' => 'Private'],['name' => 'Gono Bishwabidyalay','type' => 'Private'],['name' => 'Hamdard University Bangladesh','type' => 'Private'],['name' => 'International Islamic University, Chittagong','type' => 'Private'],['name' => 'Chittagong Independent University (CIU)','type' => 'Private'],['name' => 'University of Science & Technology Chittagong','type' => 'Private'],['name' => 'Begum Gulchemonara Trust University','type' => 'Private'],['name' => 'East Delta University','type' => 'Private'],['name' => 'Bangladesh Army University of Science and Technology','type' => 'Private'],['name' => 'Bangladesh Army International University of Science & Technology','type' => 'Private'],['name' => 'Britannia University','type' => 'Private'],['name' => 'Feni University','type' => 'Private'],['name' => 'Bangladesh Army University of Engineering & Technology','type' => 'Private'],['name' => 'Premier University, Chittagong','type' => 'Private'],['name' => 'Exim Bank Agricultural University Bangladesh','type' => 'Private'],['name' => 'Southern University, Bangladesh','type' => 'Private'],['name' => 'Port City International University','type' => 'Private'],['name' => 'Coxs Bazar International University','type' => 'Private'],['name' => 'Notre Dame University Bangladesh','type' => 'Private'],['name' => 'Asian University of Bangladesh','type' => 'Private'],['name' => 'Asa University Bangladesh','type' => 'Private'],['name' => 'Atish Dipankar University of Science and Technology','type' => 'Private'],['name' => 'Bangladesh Islami University','type' => 'Private'],['name' => 'Bangladesh University','type' => 'Private'],['name' => 'Central Women\'s University','type' => 'Private'],['name' => 'City University, Bangladesh','type' => 'Private'],['name' => 'Daffodil International University','type' => 'Private'],['name' => 'Eastern University, Bangladesh','type' => 'Private'],['name' => 'Green University of Bangladesh','type' => 'Private'],['name' => 'IBAIS University','type' => 'Private'],['name' => 'Sonargaon University','type' => 'Private'],['name' => 'International University of Business Agriculture and Technology','type' => 'Private'],['name' => 'Manarat International University','type' => 'Private'],['name' => 'Millennium University','type' => 'Private'],['name' => 'Northern University, Bangladesh','type' => 'Private'],['name' => 'North Western University, Bangladesh','type' => 'Private'],['name' => 'People\'s University of Bangladesh','type' => 'Private'],['name' => 'Presidency University','type' => 'Private'],['name' => 'Pundra University of Science and Technology','type' => 'Private'],['name' => 'Prime University','type' => 'Private'],['name' => 'European University of Bangladesh','type' => 'Private'],['name' => 'Primeasia University','type' => 'Private'],['name' => 'Queens University','type' => 'Private'],['name' => 'Rajshahi Science & Technology University','type' => 'Private'],['name' => 'Royal University of Dhaka','type' => 'Private'],['name' => 'Shanto-Mariam University of Creative Technology','type' => 'Private'],['name' => 'Southeast University','type' => 'Private'],['name' => 'Stamford University Bangladesh','type' => 'Private'],['name' => 'State University of Bangladesh','type' => 'Private'],['name' => 'United International University','type' => 'Private'],['name' => 'University of Asia Pacific (Bangladesh)','type' => 'Private'],['name' => 'University of Development Alternative','type' => 'Private'],['name' => 'University of Information Technology and Sciences','type' => 'Private'],['name' => 'University of Liberal Arts Bangladesh','type' => 'Private'],['name' => 'Fareast International University','type' => 'Private'],['name' => 'University of South Asia, Bangladesh','type' => 'Private'],['name' => 'Uttara University','type' => 'Private'],['name' => 'Victoria University of Bangladesh','type' => 'Private'],['name' => 'Varendra University','type' => 'Private'],['name' => 'World University of Bangladesh','type' => 'Private'],['name' => 'Leading University','type' => 'Private'],['name' => 'Metropolitan University','type' => 'Private'],['name' => 'North East University Bangladesh','type' => 'Private'],['name' => 'Sylhet International University','type' => 'Private'],['name' => 'Khwaja Yunus Ali University','type' => 'Private'],['name' => 'Global University Bangladesh','type' => 'Private'],['name' => 'University of Creative Technology Chittagong','type' => 'Private'],['name' => 'Z H Sikder University of Science & Technology','type' => 'Private'],['name' => 'Central University of Science and Technology','type' => 'Private'],['name' => 'Canadian University of Bangladesh','type' => 'Private'],['name' => 'First Capital University of Bangladesh','type' => 'Private'],['name' => 'Ishaka International University','type' => 'Private'],['name' => 'Northern University of Business & Technology, Khulna','type' => 'Private'],['name' => 'North Bengal International University','type' => 'Private'],['name' => 'Ranada Prasad Shaha University','type' => 'Private'],['name' => 'Islamic University of Technology','type' => 'International'],['name' => 'Asian University for Women','type' => 'International'],['name' => 'Bangladesh Open University','type' => 'Special'],['name' => 'National University of Bangladesh','type' => 'Special'],['name' => 'Islamic Arabic University','type' => 'Special']
        ];