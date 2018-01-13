<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 16:59
 */
use view\TemplateView;
?>
<!DOCTYPE html>
<html>
<h1 align="center" style="font-family: Helvetica;"><span style="color: #f4476b;">Roomie</span> | Your apartment</h1>
<br>
<table style="height: 237px; border-color: #f4476b; border-collapse: collapse; width: 463.5px; margin-left: auto; margin-right: auto; font-size: 20px;" border="1">
    <tbody>
    <tr style="height: 30px; font-family: Helvetica;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Street</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Zip Code</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">City</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Canton</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Number of rooms</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Square meters</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Rent</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    <tr style="height: 30px;">
        <td style="width: 186px; padding-left: 10px; font-family: Helvetica;">Available from</td>
        <td style="width: 274.5px; padding-left: 10px; font-family: Helvetica;">&nbsp;</td>
    </tr>
    </tbody>
</table>
    <?php
    foreach($this->customers as $customer): /* @var Customer $customer */ ?>
    <tr>
        <td><?php echo $customer->getId(); ?> </td>
        <td><?php echo TemplateView::noHTML($customer->getName()); ?></td>
        <td><?php echo TemplateView::noHTML($customer->getEmail(), false); ?> </td>
        <td><?php echo TemplateView::noHTML($customer->getMobile()); ?> </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>