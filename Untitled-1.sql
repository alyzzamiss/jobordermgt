INSERT INTO accounts (account_name, account_balance)
VALUES ('Income', 125000), ('Fiduciary', 175000), ('GAA', 225000);

INSERT INTO cost_centers (costcenter_name)
VALUES ('College of Business and Administration'),
('College of Nursing'),
('College of Engineering and Technology'),
('College of Education'),
('College of Arts and Social Sciences'),
('College of Science and Mathematics'),
('College of Computer Studies'),
('College of Manny Cabido');

INSERT INTO apps (type, year, quarter, costcenter_id)
VALUES ('Supplemental', '2019', '1st Quarter', 1),
('Supplemental', '2019', '2nd Quarter', 2),
('Supplemental', '2019', '3rd Quarter', 3),
('Supplemental', '2019', '4th Quarter', 4),
('Supplemental', '2020', '1st Quarter', 5),
('Supplemental', '2020', '2nd Quarter', 6),
('Supplemental', '2020', '3rd Quarter', 7),
('Supplemental', '2020', '4th Quarter', 8);


INSERT INTO app_details (item_name, specification, app_id)
VALUES ('Computer Repair', 'Blah', 3), ('Aircon Maintenance', 'Blah',3),
('Building Repair','Blah', 1), ('Building Repair','Blah', 2), ('Meals and Snacks','Blah', 4),
('Meals and Snacks','Blah', 3), ('Aircon and Maintenance','Blah', 2), ('Computer Repair','Blah', 5);

INSERT INTO job_orders (jo_title, jo_details, date_due, amount, app_item_id, account_id, staff_id)
VALUES ('Computer Repair', 'Just repairing computers', '2019-05-17', 125000, 1, 2, 2),
('Aircon Maintenance', 'Just maintaining airconditioners for your comfort in the office', '2019-05-10', 185000, 2, 1, 2),
('Building Repair', 'We are responsible for building repairs', '2019-05-08', 550750, 3, 3, 1);

INSERT INTO staff (staff_name, staff_position)
VALUES ('Carlo Miguel Dy', 'GodLevel Full Stack Developer System Administrator Hahaha'),
('Manny Cabido', 'Maestro'),
('Lomesindo Caparida', 'Maestro II');

-- INSERT INTO ppmp_items (quarter, item_name)
-- VALUES ('1st Quarter', 'Item One'),
-- ('2nd Quarter', 'Item Two'),
-- ('3rd Quarter', 'Item Three'),
-- ('4th Quarter', 'Item Four'),
-- ('1st Quarter', 'Item OnFive'),
-- ('2nd Quarter', 'Item Six'),
-- ('3rd Quarter', 'Item Seven'),
-- ('4th Quarter', 'Item Eight'),
-- ('1st Quarter', 'Item Nine'),
-- ('2nd Quarter', 'Item Ten')