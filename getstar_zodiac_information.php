
<?php
$Month=$_GET["M"];// gets the date through query string
$Date=(int)$_GET["D"];// gets the Month through query string

//Checks the validation of date
 if  ($Month=="Febuary" && $Date>29)
	 {	
	 	echo "Febuary has maximum 29 days select valid date";
		exit();
	 }
	else  if($Month=="April" && $Date>30)
	 {	
	 	echo "April has maximum 30 days select valid date";
		exit();
	 }
	else   if($Month=="June" && $Date>30)
	 {	
	 	echo"June has maximum 30 days select valid date";
		exit();
	 }
	else   if($Month=="September" && $Date>30)
	 {	
	 	echo"September has maximum 30 days select valid date";
		exit();
	 } 
	else  if($Month=="November" && $Date>30)
	 {	
	 	echo"November has maximum 30 days select valid date";
		
	 }
	 
 //get star and return star information

 if($Date >=20 && $Month=="April" || $Date<=20 && $Month=="May")
 {
    ?> <b>Taurus (Apr 20 - May 20) </b>  	<?php echo "is the fixed/earth sign. Taureans stubbornly cling to their own ideas and habits and may fail to take advantage of new ideas or situations, because they cannot see their practical use. They have to understand that while tenacity and a stable temperament yield reward in many endeavors, tolerance and flexibility are the best assets when it comes to personal relationships.";
	
	
 }
 else if($Date >=21 && $Month=="May" || $Date<21 && $Month=="June")
 {
 	?><b>Gemini (May 21 - Jun 20)</b><?php echo " is the mutable/air sign. Using their communicative skills, Geminis adapt to any situation they encounter. However, they must learn to speak with candor instead of simply repeating what others want to hear. Geminis have clever tongues and develop an amazing ability to obscure the facts with stimulating and imaginative chatter.";
 }
 else if($Date >=22 && $Month=="June" || $Date<=22 && $Month=="July")
 {
 	?> <b>Cancer (Jun 21 - July 22)</b><?php echo"  is the cardinal/water sign. Cancerians get things done through the power of their emotional commitment. Not only do they aggressively work to accomplish the goals inspired by their own feelings, they also know how to appeal to the emotions of others. By making other people feel like family members, Cancerians effectively motivate others to get things done. They have to learn how to reach an emotional balance since they tend to be overly sensitive and moody.";
 }else if($Date >=23 && $Month=="July" || $Date<=22 && $Month=="August")
 {
 	?> <b> Leo (Jul 23 - Aug 22) <?php echo  "is the fixed/fire sign. Leos stubbornly cling to their pride. They do not readily alter their opinions or behavior at the request of others. Their stubborn nature makes it hard for them to accept that there is no virtue in giving what they want to give, rather virtue means giving what may be wanted or needed. Neither is there reward in giving misguided loyalty to those who are not worthy of it, which is another possibility with a Leo Sun sign.";
 }else if($Date >=23 && $Month=="August" || $Date<=22 && $Month=="September")
 {
 	?> <b> Virgo (Aug 23 -Sep 22) </b> <?php echo"is the mutable/earth sign. Virgos adapt to different people and situations by finding ways to make themselves useful. To hide their vulnerability, they focus attention on what they're doing rather than who they are. To deflect attention away from themselves, Virgos will also focus on other people by praising their talents and virtues, or by criticizing faulty behavior or personal imperfection.";
 }
 else if($Date >=23 && $Month=="September" || $Date<23 && $Month=="October")
 {
 	?> <b>Libra (Sep 23 - Oct 22) </b>  <?php echo"is the cardinal/air sign. Librans accomplish things because they intellectually evaluate what needs to be done, then they charm others into cooperating to achieve the goal. By unselfishly sharing the success of accomplishment with those who have assisted them, Librans nurture the cooperative efforts of others. They have to learn how to deal with confrontation. Their fear of hurting others and also of hostile situations can keep them from reaching their goals.";
 }else if($Date >=23 && $Month=="October" || $Date<=21 && $Month=="November")
 {
 ?> <b>Scorpio (Oct 23 - Nov 21) </b>  <?php echo " is the fixed/water sign. Scorpios stubbornly cling to emotional attachments. They rarely forget or forgive emotional rejection. They have to learn that jealousy and possessiveness are self-defeating. Rechanneling negative feelings and experiences into constructive activity benefits others, as well as themselves. No other sign has the emotional strength of Scorpio.
";
 }
 else if($Date >=22 && $Month=="November" || $Date<=21 && $Month=="December")
 {
 	?> <b>Sagittarius (Nov 22 - Dec 21)</b>  <?php echo "  is the mutable/fire sign. Restless energy and the need for personal independence keep a Sagittarian moving in many directions. They become experts at adapting to the culture or climate of their immediate environment. Always ready to travel for business or pleasure (and sometimes because of an overwhelming urge to escape) Sagittarians are all too willing to break free of the confinements of responsibility and work.";
 }
 else if($Date >=22 && $Month=="December" || $Date<=19 && $Month=="January")
 {
 	?><b> Capricorn (Dec 22 - Jan 19)</b> <?php echo "is the cardinal/earth sign. Capricorns are natural goal setters. They willingly handle many tasks when it helps them get what they want. Many things are accomplished, because Capricorns always strive to reach higher goals. They need definitive guidelines. Rules and regulations provide the structure they need to establish their own behavioral patterns. They must learn, however, that the end never justifies the means.";
 }else if($Date >=20 && $Month=="January" || $Date<=18 && $Month=="Febuary")
 {
 	?><b> Aquarius  (Jan 20 - Feb 18)</b> <?php echo" is the fixed/air sign. Aquarians are born looking for ideologies to which they can stubbornly cling. They refuse to budge whenever an issue involves what they believe to be a matter of principle. As in the case of the Aquarian Abraham Lincoln, society greatly benefits when these principles are noble.";
 }else if($Date >=19 && $Month=="Febuary" || $Date<=20 && $Month=="March")
 {
 	?><b> Pisces (Feb 19 - Mar 20) </b> <?php echo " is the mutable/water sign. Pisceans adapt emotionally to their environment. Often painfully shy, they are adept at imitating the mannerisms of other people in order to hide their own personalities. A Piscean can too easily become a victim by identifying with the personality and problems of other people, because this severely restricts the development of their own personality and talent.";
 }
 else if($Date >=20 && $Month=="April" || $Date<=20 && $Month=="April")
 {
	
		?><b> Aries (Mar 21- Apr 19) </b><?php echo " is the cardinal/fire sign. Aries people need to keep physically busy. They accomplish many things simply because of their restless energy. They need to learn how to make constructive use of their energetic efforts. The typical Aries urge is to take on more than can be done reasonably well. Though others may find it difficult to keep pace with an Aries, they are attracted to their animation and spirited personality.";
	
 }



?>