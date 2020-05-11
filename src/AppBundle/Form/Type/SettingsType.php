<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reportEmail', 'text', array(
            'label' => 'דואל אליו ישלחו דוחות גולשים',
        ));

        $builder->add('contactEmail', 'text', array(
            'label' => 'דואל אליו ישלחו טפסי יצירת קשר',
        ));

        $builder->add('deleteMessagesAfterDaysNumber', 'text', array(
            'label' => 'גיל ההודעה מקסימלי בימים לפני מחיקה (שדה ריק = לא מוגבל)',
            'required' => false,
        ));

        $builder->add('sendMessageUsersNumber', 'text', array(
            'label' => 'מספר חברים מקסימלי שכל חבר יוכל לצור קשר איתם ביום (שדה ריק = לא מוגבל)',
            'required' => false,
        ));

        $builder->add('usersPerPage', 'text', array(
            'label' => 'מספר תוצאות בעמוד  במצב רשימה',
        ));

        $builder->add('isCharge', 'checkbox', array(
            'label' => 'האם אתר במצב תשלום',
            'required' => false,
        ));

        $builder->add('messagePopularityDaysNumber', 'text', array(
            'label' => 'הודעה ישנה ביותר בימים למדידת פופולריות',
        ));

        $builder->add('userConsideredAsOnlineAfterLastActivityMinutesNumber', 'text', array(
            'label' => 'מספר דקות אחרי גישה אחרונה לאתר בהם המשתמש עדיין נחשב ב"אונליין"',
        ));

        $builder->add('userConsideredAsNewAfterDaysNumber', 'text', array(
            'label' => 'מספר ימים בהם המשתמש נחשב "חדש"',
        ));

    }
    public function getName()
    {
        return 'settings';
    }

}