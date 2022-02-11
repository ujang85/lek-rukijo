<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[AduanPresensi]].
 *
 * @see AduanPresensi
 */
class AduanPresensiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AduanPresensi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AduanPresensi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
