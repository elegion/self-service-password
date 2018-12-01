    <div class="navbar-wrapper">

        <div class="navbar navbar-custom navbar-static-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?php if ( $action === "change" ) { echo "active"; } ?>">
                  <a href="index.php"><?php echo $messages["title"]; ?></a>
                </li>
                <?php if ( $use_questions ) { ?>
                <li class="<?php if ( $action === "resetbyquestions" or $action === "setquestions" ) { echo "active"; } ?>">
                  <a href="?action=resetbyquestions"
                     data-toggle="menu-popover"
                     data-content="<?php echo htmlentities(strip_tags($messages["changehelpquestions"])); ?>"
                  ><?php echo $messages["menuquestions"]; ?></a>
                </li>
                <?php } ?>
                <?php if ( $use_tokens ) { ?>
                <li class="<?php if ( ( $action === "resetbytoken" and $source !== "sms" ) or $action === "sendtoken" ) { echo "active"; } ?>">
                  <a href="?action=sendtoken"
                     data-toggle="menu-popover"
                     data-content="<?php echo htmlentities(strip_tags($messages["changehelptoken"])); ?>"
                  ><?php echo $messages["menutoken"]; ?></a>
                </li>
                <?php } ?>
                <?php if ( $use_sms ) { ?>
                <li class="<?php if ( ( $action === "resetbytoken" and $source === "sms" ) or $action === "sendsms" ) { echo "active"; } ?>">
                  <a href="?action=sendsms"
                     data-toggle="menu-popover"
                     data-content="<?php echo htmlentities(strip_tags($messages["changehelpsms"])); ?>"
                  ><?php echo $messages["menusms"]; ?></a>
                </li>
                <?php } ?>
                <?php if ( $change_sshkey ) { ?>
                <li class="<?php if ( $action === "changesshkey" ) { echo "active"; } ?>">
                  <a href="?action=changesshkey"
                     data-toggle="menu-popover"
                     data-content="<?php echo htmlentities(strip_tags($messages["changehelpsshkey"])); ?>"
                  ><?php echo $messages["menusshkey"]; ?></a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>

    </div>
