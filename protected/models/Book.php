<?php
/**
 * The followings are the available columns in table 'tbl_post':
 * @property integer $id
 * @property string $title
 * @property string $description
 */
class Book extends CActiveRecord
{
	public function tableName()
	{
		return '{{book}}';
	}

	public function search()
	{
		$criteria = new CDbCriteria;
		$criteria->compare('title', $this->title, true);
		return new CActiveDataProvider('Book', array(
			'criteria' => $criteria,
			'sort' => array(
				'defaultOrder' => 'id DESC',
			)
		));
	}

	/**
	 * @return string the URL that shows the detail of the post
	 */
	public function getUrl()
	{
		return Yii::app()->createUrl('post/view', array(
			'id'=>$this->id,
			'title'=>$this->title,
		));
	}
}

?>