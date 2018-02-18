/*SQL codes to create extra tables*/

$sql = "CREATE TABLE boardgames (`Board_game` VARCHAR(30) NOT NULL , `Host` VARCHAR(50) NOT NULL , `Date` DATE NOT NULL , `Venue` INT NOT NULL , PRIMARY KEY (`Board_game`))";


$sql = "CREATE TABLE assignedboardgames ( `Assigned_board_game` INT NOT NULL , `MembershipID` int() NOT NULL , `First_name` VARCHAR(50) NOT NULL , `Date` DATE NOT NULL , `Venue` INT NOT NULL , PRIMARY KEY (`MembershipID`))";


$sql = "CREATE TABLE schedule (`Game` VARCHAR(30) NOT NULL , `Date` DATE NOT NULL , `Venue` VARCHAR(50) NOT NULL , PRIMARY KEY (`Game`))";


$sql = "CREATE TABLE highscore ( `Game` VARCHAR(30) NOT NULL, `Current_high_score` INT NOT NULL ,  `MembershipId` INT NOT NULL , `First_Name` VARCHAR(30) NOT NULL , `Next_Game_Date` DATE NOT NULL , PRIMARY KEY (`Game`))";
