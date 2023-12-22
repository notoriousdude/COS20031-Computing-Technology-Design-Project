from faker import Faker

fake = Faker()
jobBenefit = 'Health Insurance, Dental Insurance, Vision Insurance',\
'Retirement Savings Plans (e.g., 401(k)), Life Insurance, Disability Insurance',\
'Paid Time Off (PTO), Paid Holidays, Flexible Work Hours',\
'Remote Work Opportunities, Work-from-Home Options, Parental Leave',\
'Childcare Assistance, Fitness or Gym Memberships, Employee Assistance Programs (EAP)',\
'Professional Development Opportunities, Tuition Reimbursement, Training and Certification Programs',\
'Stock Options, Bonuses (Performance, Signing, or Year-End Bonuses), Profit Sharing',\
'Commuter Benefits (Subsidized or Reimbursement), Relocation Assistance, Wellness Programs',\
'Casual Dress Code or Dress-down Fridays, Company-sponsored Events and Activities, Employee Discounts (on products or services)',\
'On-site Fitness Facilities, Career Advancement Opportunities, Mentorship Programs',\
'Employee Recognition Programs, Retirement Planning Assistance, Sabbatical Leave',\
'Volunteer Time Off (VTO), Flexible Spending Accounts (FSA), Health Savings Accounts (HSA)',\
'Maternity/Paternity Support Programs, Adoption Assistance, Legal Assistance Plans',\
'Pet Insurance, Mobile Phone Allowance or Discounts, Home Office Stipend',\
'Casual Work Environment, Diversity and Inclusion Initiatives, Employee Referral Programs',\
'Continuing Education Programs, Mental Health Support Services, Financial Wellness Programs',\
'Language Learning Programs, Flexible Leave Policies, Paid Jury Duty Leave',\
'Employee Loans or Financial Assistance, Career Counseling Services, Transportation Allowances'

jobID = 7

print("INSERT INTO job_benefits (job_id, benefit)\n VALUES")
for i in range(599994):
    benefit = fake.random_element(elements=(jobBenefit))

    print(f"({jobID},'{benefit}'),")
    jobID += 1
    if i == 599993:
        print(f"({jobID},'{benefit}');")
        break


