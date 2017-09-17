Rank Post Styling for phpBB 3.1/3.2
===================================

#### Description
Extension for phpBB 3.1/3.2 that adds a CSS rule option to user ranks. Useful for styling posts of special users.
![Screenshot](screenshot.png)

#### Version
v1.0.5 (18-09-2017)
[![Build Status](https://api.travis-ci.org/Sajaki/RankPostStyling.svg)](https://travis-ci.org/Sajaki/RankPostStyling)

### Features
- Integration with phpBB ranks ACP module
- Allows admin to specify a CSS class rule for each "special" rank
- CSS class rule is applied to `<div class="post-container">` which wraps posts
- Available in:
  - Viewtopic
  - Search results (posts mode)
  - Memberlist (viewprofile)
- Gives total control to style whatever you like (fonts, colors, images, etc.)  

#### Warning!
You need to be abit familiar with HTML and CSS. 
No support will be given beyond the actual functionality of the extension. All styling is up to you.

#### Requirements
- phpBB 3.1.0 or higher
- PHP 5.3.3 or higher

#### Languages supported
- English, Spanish, Arabic, Croatian, Polish, French, Turkish, Italian

## Installation
1. [Download the latest release](http://www.avathar.be/bbdkp/app.php/dl_ext/?cat=2) and unzip it.
2. Copy the entire contents from the unzipped folder to `/ext/paybas/rankpoststyling/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `Rank Post Styling` under "Disabled Extensions" and click `Enable`.

#### Tutorial
1. go to ACP -> Users and Groups -> Manage Ranks. There is now a new column 'Rank Style'. 
2. here you can define the css style that will be applied to the post content from members with this rank. add "rankpoststyle1" to one of the ranks.
3. the example css 'rankpoststyling.css' will now be applied to post content of all ranked posts. 
4. pbWoW & pbTech have other predefined rank styles, that you can apply in ACP. 

#### Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `Rank Post Styling`.
3. To permanently uninstall, click `Delete Data`, then delete the `rankpoststyling` folder from `/ext/paybas/`.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2015 - PayBas
