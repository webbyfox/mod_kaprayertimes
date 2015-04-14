<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="custom<?php echo $moduleclass_sfx ?>">
    <table style="border-width:0px; width: 100%">
        <tr>
            <th>
            </th>
            <th>
                <span title="<?php echo JText::_('BEGINS'); ?>"><?php echo JText::_('BEGINS'); ?></span>
            </th>
            <th>
                <span title="<?php echo JText::_('JAMAAT'); ?>"><?php echo JText::_('JAMAAT'); ?></span>
            </th>
        </tr>

        <tr>
            <td>
                <span title="<?php echo JText::_('FAJAR'); ?>"><?php echo JText::_('FAJAR'); ?></span>
            </td>
            <td>
                <span title="<?php echo $item->fajr_begins ?>"><?php echo $item->fajr_begins ?></span>
            </td>
            <td>
                <span title="<?php echo $item->fajr_iqama ?>"><?php echo $item->fajr_iqama ?></span>
            </td>
        </tr>

        <tr>
            <td>
                <span title="<?php echo JText::_('SUNRISE'); ?>"><?php echo JText::_('SUNRISE'); ?></span>
            </td>
            <td>
                <span title="<?php echo $item->sunrise ?>"><?php echo $item->sunrise ?></span>
            </td>
            <td>
            </td>
        </tr>	

        <tr>
            <td>
                <span title="<?php echo JText::_('ZUHR'); ?>"><?php echo JText::_('ZUHR'); ?></span>
            </td>
            <td>
                <span title="<?php echo $item->dhuhr_begins ?>"><?php echo $item->dhuhr_begins ?></span>
            </td>
            <td>
                <span title="<?php echo $item->dhuhr_iqama ?>"><?php echo $item->dhuhr_iqama ?></span>
            </td>
        </tr>

        <tr>
            <td>
                <span title="<?php echo JText::_('ASR'); ?>"><?php echo JText::_('ASR'); ?></span>
            </td>
            <td>
                <span title="<?php echo $item->asr_begins ?>"><?php echo $item->asr_begins ?></span>
            </td>
            <td>
                <span title="<?php echo $item->asr_iqama ?>"><?php echo $item->asr_iqama ?></span>
            </td>
        </tr>

        <tr>
            <td>
                <span title="<?php echo JText::_('MAGHRIB'); ?>"><?php echo JText::_('MAGHRIB'); ?></span>
            </td>
            <td>
                <span title="<?php echo $item->maghrib_begins ?>"><?php echo $item->maghrib_begins ?></span>
            </td>
            <td>
                <span title="<?php echo $item->maghrib_iqama ?>"><?php echo $item->maghrib_iqama ?></span>
            </td>
        </tr>	    

        <tr>
            <td>
                <span title="<?php echo JText::_('ISHA'); ?>"><?php echo JText::_('ISHA'); ?></span>
            </td>
            <td>
                <span title="<?php echo $item->isha_begins ?>"><?php echo $item->isha_begins ?></span>
            </td>
            <td>
                <span title="<?php echo $item->isha_iqama ?>"><?php echo $item->isha_iqama ?></span>
            </td>
        </tr>  
    </table>
    <?php
    if ($showfirdayprayer):
        echo '<span id="fridayprayer">' . $firdayprayer . '</span>';
    endif;
    if ($showfirdayprayer2):
        echo '<span id="fridayprayer2">' . $firdayprayer2 . '</span>';
    endif;
    if ($hyperlink):
        echo '<span id="hyperlink" style="display:block">' . $link . '</span>';
    endif;
    if ($hyperlink2):
        echo '<span id="hyperlink2" style="display:block">' . $link2 . '</span>';
    endif;
    ?>
</div>
