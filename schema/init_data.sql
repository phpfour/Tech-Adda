SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `tech_adda`
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`) VALUES
(1, 'PHP'),
(2, 'Ruby'),
(3, '.NET');

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `talk_id`, `user_id`, `body`, `rating`, `is_private`, `create_date`) VALUES
(1, 1, 1, 'Excellent session!', NULL, 0, '2012-01-23 20:01:53'),
(2, 1, 1, 'It did really open my eyes; as web developers we very often ignore the actual protocol that we''re sending stuff through. Understanding the underlying mechanics of HTTP is indeed really important and even though I was half asleep the talk did indeed have many valid points and was nicely presented.', NULL, 0, '2012-01-23 20:11:34'),
(4, 1, 1, 'Great talk! It''s very nice to listen the basics explained by a master. Specially some basics I even knew about, thought.', NULL, 0, '2012-01-23 20:36:27'),
(5, 1, 1, 'Although much of the talk was what you can see in Symfony2 caching documentation, but anyway it is a pleasure to hear Fabien live. Big todo to all of us, read the HTTP Specification.', NULL, 0, '2012-01-23 20:39:31');

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `title`, `summary`, `logo`, `category_id`, `location`, `href`, `start_date`, `end_date`, `is_active`, `total_attending`, `create_date`) VALUES
(1, 1, 'PHPBenelux Conference 2012', 'The conference and tutorials will take place at the Best Western Hotel Ter Elst in Antwerp (Belgium). Friday morning January 27th we have a set of tutorials. The conference is spread over 2 days: Friday afternoon (after the tutorials) and Saturday. Tutorials as well as the conference itself are spread over several parallel tracks.\n\nOn Friday evening, we''re having the conference social. This will include drinks and bowling as we managed to reserve the entire bowling alley.', 'http://joind.in/inc/img/event_icons/phpbnl2012-small.png', 1, 'Best Western Ter Elst', 'http://conference.phpbenelux.eu/', '2012-01-27', '2012-01-29', 1, 0, '2012-01-20 10:11:12'),
(2, 1, 'ZendCon 2011', 'The 7th Annual Zend PHP Conference (ZendCon) will take place October 17-20, 2011, in Santa Clara, California. ZendCon is the largest gathering of the PHP Community and brings together PHP developers and IT managers from around the world to discuss PHP best practices and explore new technologies.\r\n\r\nAt ZendCon, youâ€™ll learn from a variety of technical sessions and in-depth tutorials. International industry experts, renowned thought-leaders and experienced PHP practitioners, will discuss PHP best practices and explore future technological developments. ZendCon 2011 will focus on ways that PHP fits into major trends in the IT world. The primary conference themes are Cloud Computing, Mobile and User Experience, and Enterprise and Professional PHP.\r\n\r\nAn Exhibit Hall featuring industry leaders offers a space to meet innovative companies and unique networking opportunities are at hand.', NULL, 1, 'Santa Clara Convention Center', 'http://joind.in/inc/img/event_icons/zendcon-icon.gif', '0000-00-00', '0000-00-00', 1, 0, '2012-01-24 10:13:46'),
(3, 1, 'PHPCon Poland 2011', 'The second edition of Polish weekend meeting for PHP programmers and enthusiasts. Attedees spend the time on lectures, workshops, lightning talks and after hours discussions to late night. There will be also a time for a little sightseeing - hotel is located in national park neighborhood.\r\n\r\nThe Official PHPConPL''s webpage has been just started. Talk proposals can be entered directly at phpcon.pl.', 'http://joind.in/inc/img/event_icons/logo-joind-in.png', 1, 'Przedwiosnie Hotel', 'http://www.phpcon.pl/2011/en/', '0000-00-00', '0000-00-00', 1, 0, '2012-01-24 10:18:35');

--
-- Dumping data for table `talks`
--

INSERT INTO `talks` (`talk_id`, `event_id`, `title`, `summary`, `speaker`, `slide_link`) VALUES
(1, 2, 'Profiling PHP Applications', 'The web is full of advice focussed on improving performance. Before you can optimise however, you need to find out if your code is actually slow; then you need to understand the code; and then you need to find out what you can optimise.\n\nThis talk introduces various tools and concepts to optimise the optimisation of your PHP applications.', 'Derick Rethans', NULL);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `create_date`) VALUES
(1, 'phpfour@gmail.com', '', '2012-01-23 07:36:06');
