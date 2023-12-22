from faker import Faker

fake = Faker()

#Job title
jobName = "Software Engineer", "Marketing Manager", "Registered Nurse", "Financial Analyst", "Human Resources Specialist", "Mechanical Engineer", 
"Graphic Designer", "Data Scientist", "Operations Manager", "Civil Engineer", "Content Writer", "Medical Doctor", "Sales Representative", "Social Media Manager", 
"UX/UI Designer", "Accountant", "Electrician", "Customer Service Representative", "Project Manager", "Pharmacist", "Digital Marketing Specialist", 
"Humanitarian Aid Worker", "Environmental Scientist", "Event Planner", "Chef", "Journalist", "Art Director", "Public Relations Specialist", "Physical Therapist"

#Recruiter
nameOfCompany = 'Google', 'Microsoft', 'Apple', 'Amazon', 'Facebook', 'IBM', 'Intel', 'Oracle', 'Cisco', 'NVIDIA', 'Adobe', 'Salesforce', 'VMware', 'HP Inc.', 'Dell Technologies', 'Tesla', 'Uber', 'Twitter',
'McKinsey & Company', 'The Boston Consulting Group (BCG)', 'Bain & Company', 'JPMorgan Chase', 'Goldman Sachs', 'Morgan Stanley', 'Deloitte', 'PricewaterhouseCoopers (PwC)', 'Ernst & Young (EY)', 'KPMG', 'Procter & Gamble (P&G)', 'The Coca-Cola Company', 'Johnson & Johnson', 'General Electric (GE)', 'IBM Global Business Services', 'Accenture', 'Walmart',
'The Walt Disney Company', 'Comcast Corporation', 'Netflix', 'ViacomCBS', 'Time Warner (now part of WarnerMedia)', '21st Century Fox (now part of The Walt Disney Company)', 'Sony Corporation', 'Bertelsmann', 'News Corporation', 'BBC (British Broadcasting Corporation)', 'NBCUniversal', 'HBO', 'AT&T', 'Discovery, Inc.', 'Viacom', 'CBS Corporation', 'ESPN', 'BuzzFeed'

#Application deadline 
deadline = 'January 15, 2023', 'March 8, 2024', 'June 22, 2023', 'October 5, 2024', 'December 18, 2023', 'April 2, 2024', 'August 11, 2023', 'February 27, 2024', 
'September 9, 2023', 'May 14, 2024', 'July 3, 2023', 'November 29, 2024', 'January 7, 2023', 'March 19, 2024', 'June 9, 2023', 'October 30, 2024', 'December 5, 2023', 
'April 12, 2024', 'August 26, 2023', 'February 14, 2024', 'September 21, 2023', 'May 3, 2024', 'July 28, 2023', 'November 1, 2024', 'January 11, 2023', 'March 26, 2024', 
'June 17, 2023', 'October 8, 2024', 'December 22, 2023', 'April 6, 2024', 'August 14, 2023', 'February 29, 2024', 'September 13, 2023', 'May 20, 2024', 'July 9, 2023', 
'November 25, 2024', 'January 3, 2023', 'March 15, 2024', 'June 5, 2023', 'October 26, 2024', 'December 1, 2023', 'April 9, 2024', 'August 20, 2023', 'February 8, 2024', 
'September 17, 2023', 'May 8, 2024', 'July 24, 2023', 'November 7, 2024', 'January 5, 2023', 'March 21, 2024', 'June 12, 2023', 'October 1, 2024', 'December 15, 2023', 
'April 4, 2024'


#Salary
jobIncome = '120000', '85000', '150000', '60000', '180000', '90000', '130000', '45000', '170000', '75000', '110000', '55000', '200000', '80000', 
'140000', '100000', '35000', '165000', '70000', '125000', '50000', '160000', '90000', '190000', '80000', '130000', '60000', '170000', '40000', 
'150000', '100000', '55000', '120000', '85000', '110000', '45000', '200000', '70000', '140000', '95000', '180000', '50000', '160000', '75000', 
'125000', '30000', '190000', '110000', '40000', '150000', '85000', '120000', '60000', '180000'


#Working location
location = 'Silicon Valley, California', 'San Francisco, California', 'Seattle, Washington', 'New York City, New York', 'Boston, Massachusetts', 'Austin, Texas', 
'Los Angeles, California', 'Chicago, Illinois', 'Denver, Colorado', 'Research Triangle Park, North Carolina', 'Washington, D.C.', 'Raleigh, North Carolina', 'Atlanta, Georgia', 
'Dallas, Texas', 'San Diego, California', 'Houston, Texas', 'Minneapolis, Minnesota', 'Portland, Oregon', 'Philadelphia, Pennsylvania', 'Miami, Florida', 'Detroit, Michigan', 
'Phoenix, Arizona', 'Pittsburgh, Pennsylvania', 'Charlotte, North Carolina', 'Nashville, Tennessee', 'Salt Lake City, Utah', 'Orlando, Florida', 'London, United Kingdom', 
'Berlin, Germany', 'Paris, France', 'Amsterdam, Netherlands', 'Dublin, Ireland', 'Stockholm, Sweden', 'Zurich, Switzerland', 'Copenhagen, Denmark', 'Barcelona, Spain', 
'Munich, Germany', 'Helsinki, Finland', 'Oslo, Norway', 'Milan, Italy', 'Vienna, Austria', 'Brussels, Belgium', 'Prague, Czech Republic', 'Warsaw, Poland', 'Lisbon, Portugal', 
'Budapest, Hungary', 'Athens, Greece', 'Edinburgh, United Kingdom', 'Luxembourg City, Luxembourg', 'Geneva, Switzerland', 'Rome, Italy', 'Madrid, Spain', 
'Manchester, United Kingdom', 'Dubai, United Arab Emirates'

#category
major = 'IT', 'Business', 'Media', 'Engineering', 'Health', 'Education', 'Science'

#Applicants Count
count = '29', '36', '14', '47', '23', '45', '19', '38', '11', '27', '42', '30', '16', '35', '18', '26', '49', '13', '48', '20', '44', '15', '33', '12', '40', '24', '37', '22', '31', '50'



print("INSERT INTO job_description (job_title, recruiter, application_deadline, salary, working_location, category, applicant_count)\n VALUES")
for i in range(600000):
    jobTitle = fake.random_element(elements=(jobName))
    recruiter = fake.random_element(elements=(nameOfCompany))
    applicationDeadline = fake.random_element(elements=(deadline))
    salary = fake.random_element(elements=(jobIncome))
    workingLocation = fake.random_element(elements=(location))
    category = fake.random_element(elements=(major))
    numOfApplicant = fake.random_element(elements=(count))
    
    print(f"('{jobTitle}','{recruiter}','{applicationDeadline}',{salary},'{workingLocation}','{category}',{numOfApplicant}),")
    
    if i == 599999:
        print(f"('{jobTitle}','{recruiter}','{applicationDeadline}',{salary},'{workingLocation}','{category}',{numOfApplicant});")
        break


