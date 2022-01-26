<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Surat]].
 *
 * @see Surat
 */
class SuratQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Surat[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Surat|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
