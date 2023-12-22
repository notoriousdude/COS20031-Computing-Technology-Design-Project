from faker import Faker

fake = Faker()

usaUni = "University of Oxford", "University of Cambridge", "ETH Zurich - Swiss Federal Institute of Technology", "University College London (UCL)",
"Imperial College London", "University of Edinburgh", "University of Manchester", "University of Munich", "Heidelberg University","University of Amsterdam",
"Sorbonne University", "Ecole Polytechnique", "University of Copenhagen", "University of Helsinki", "KU Leuven", "University of Zurich", "Stockholm University", "University of Barcelona", "University of Vienna", "University of Warsaw",
"Ludwig Maximilian University of Munich", "University of Milan", "University of Oslo", "University of Geneva", "University of Bristol", "King's College London", "University of Glasgow", "University of Bristol", "University of Copenhagen", "University of Tübingen", "University of Freiburg", 
"University of Lausanne", "University of Leipzig", "University of Bonn", "University of Würzburg", "University of Bologna", "University of Maastricht", "University of Valencia", "University of Porto", "University of Aarhus", "University of Turin", "University of Göttingen", "University of Mannheim",
"University of Groningen", "University of Antwerp", "University of Southampton", "University of Leipzig", "University of Toulouse", "University of Rennes 1", "University of Lyon", "University of Cologne", 
"University of Lisbon", "University of Porto", "University of Barcelona", "University of Seville", "University of Madrid", "University of Valencia", "University of Granada", "University of Oulu", "University of Jyväskylä", "University of Turku", "University of Helsinki", "University of Lappeenranta-Lahti",
"Harvard University", "Stanford University", "Massachusetts Institute of Technology (MIT)", "California Institute of Technology (Caltech)", "Princeton University", "Columbia University", "University of Chicago", "Yale University", "University of Pennsylvania", "Johns Hopkins University", "University of California, Berkeley", "University of Michigan, Ann Arbor", "Carnegie Mellon University", "University of California, Los Angeles (UCLA)", "New York University (NYU)",
"University of California, San Francisco (UCSF)", "University of Illinois Urbana-Champaign", "Northwestern University", "University of California, San Diego (UCSD)", "Cornell University", "University of Texas at Austin", "University of Washington", "Georgia Institute of Technology", "University of Wisconsin-Madison", "University of North Carolina at Chapel Hill", "University of California, Irvine (UCI)", "University of Florida", "University of Southern California (USC)", "Pennsylvania State University", "University of Virginia", "Boston University", "Washington University in St. Louis", "University of Maryland, College Park", "Ohio State University", "Purdue University", "University of Minnesota Twin Cities", "Emory University", "University of California, Davis (UC Davis)", "University of Pittsburgh", "Brown University",
"Rice University", "Vanderbilt University", "University of Colorado Boulder", "University of Arizona", "University of Rochester", "University of Miami", "University of Notre Dame", "Case Western Reserve University", "Dartmouth College", "University of California, Santa Barbara (UCSB)", "Boston College", "University of Iowa", "University of Illinois Chicago", "Tulane University", "Georgetown University", "University of California, Riverside (UCR)", "University of Utah", "Michigan State University", "Arizona State University", "Rutgers, The State University of New Jersey", "Indiana University Bloomington", 
"Virginia Tech", "North Carolina State University", "Texas A&M University", "University of Delaware", "University of Connecticut", "Colorado State University", "Florida State University", "University of South Florida", "Iowa State University", "University of Nebraska-Lincoln", "University of California, Santa Cruz (UCSC)", "University of Houston", "University of Kentucky", "Syracuse University", "University of Oregon", "University of Oklahoma", "Wayne State University", "University of Cincinnati", "University of Alabama", "University of New Mexico", "University of Kansas", "Stony Brook University (SUNY)", "University of Arkansas", 
"University of Vermont", "Utah State University", "Auburn University", "Kansas State University", "University of Maine", "West Virginia University", "University of Nevada, Reno",
"University of Mississippi", "University of Hawaii at Manoa", "University of Rhode Island", "Louisiana State University", "Mississippi State University", "University of Wyoming", "University of Alaska Fairbanks"
        

degreeUni = "Computer Science", "Mechanical Engineering", "Psychology", "Biochemistry", "Political Science", "Economics", "Environmental Science", 
"Graphic Design", "International Relations", "Neuroscience", "Journalism", "Fashion Design", "Marine Biology", "Civil Engineering", "Sociology", 
"Culinary Arts", "Linguistics", "Philosophy", "Urban Planning", "Public Health", "Aerospace Engineering", "Film Studies", "Data Science", 
"Biomedical Engineering", "Anthropology", "Digital Marketing", "Game Design", "Astrophysics", "Public Relations", "Healthcare Administration"

#print("SET @user_id = LAST_INSERT_ID();")
userID = 1
print("INSERT INTO educational_backgrounds (user_id, degree, institution)\n VALUES")
for i in range(600000):
    
    degree = fake.random_element(elements=(degreeUni))
    institution = fake.random_element(elements=(usaUni))
    
    print(f"({userID},'{degree}', '{institution}'),")
    userID += 1
    
    if i == 599999:
        print(f"({userID},'{degree}', '{institution}');")
        break