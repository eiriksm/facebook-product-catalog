<?php

namespace Eiriksm\FacebookProductCatalog;

class Row {
  private $id;
  private $title;
  private $ios_url;
  private $ios_app_store_id;
  private $ios_app_name;
  private $android_url;
  private $android_package;
  private $android_app_name;
  private $windows_phone_url;
  private $windows_phone_app_id;
  private $windows_phone_app_name;
  private $description;
  private $google_product_category;
  private $product_type;
  private $link;
  private $image_link;
  private $condition;
  private $availability;
  private $price;
  private $sale_price;
  private $sale_price_effective_date;
  private $gtin;
  private $brand;
  private $mpn;
  private $item_group_id;
  private $gender;
  private $age_group;
  private $color;
  private $size;
  private $shipping;
  private $custom_label_0;

  public function get($key) {
    if ($this->{$key}) {
      return $this->{$key};
    }
  }

  public function getAsCsvArray() {
    $fields = $this->getAsCsvHeader();

    $data = array();
    foreach ($fields as $field) {
      $data[] = $this->{$field};
    }
    return $data;
  }

  public static function getAsCsvHeader() {
    return array(
      'id',
      'title',
      'ios_url',
      'ios_app_store_id',
      'ios_app_name',
      'android_url',
      'android_package',
      'android_app_name',
      'windows_phone_url',
      'windows_phone_app_id',
      'windows_phone_app_name',
      'description',
      'google_product_category',
      'product_type',
      'link',
      'image_link',
      'condition',
      'availability',
      'price',
      'sale_price',
      'sale_price_effective_date',
      'gtin',
      'brand',
      'mpn',
      'item_group_id',
      'gender',
      'age_group',
      'color',
      'size',
      'shipping',
      'custom_label_0',
    );
  }

  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @param mixed $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * @return mixed
   */
  public function getIosUrl() {
    return $this->ios_url;
  }

  /**
   * @param mixed $ios_url
   */
  public function setIosUrl($ios_url) {
    $this->ios_url = $ios_url;
  }

  /**
   * @return mixed
   */
  public function getIosAppStoreId() {
    return $this->ios_app_store_id;
  }

  /**
   * @param mixed $ios_app_store_id
   */
  public function setIosAppStoreId($ios_app_store_id) {
    $this->ios_app_store_id = $ios_app_store_id;
  }

  /**
   * @return mixed
   */
  public function getIosAppName() {
    return $this->ios_app_name;
  }

  /**
   * @param mixed $ios_app_name
   */
  public function setIosAppName($ios_app_name) {
    $this->ios_app_name = $ios_app_name;
  }

  /**
   * @return mixed
   */
  public function getAndroidUrl() {
    return $this->android_url;
  }

  /**
   * @param mixed $android_url
   */
  public function setAndroidUrl($android_url) {
    $this->android_url = $android_url;
  }

  /**
   * @return mixed
   */
  public function getAndroidPackage() {
    return $this->android_package;
  }

  /**
   * @param mixed $android_package
   */
  public function setAndroidPackage($android_package) {
    $this->android_package = $android_package;
  }

  /**
   * @return mixed
   */
  public function getAndroidAppName() {
    return $this->android_app_name;
  }

  /**
   * @param mixed $android_app_name
   */
  public function setAndroidAppName($android_app_name) {
    $this->android_app_name = $android_app_name;
  }

  /**
   * @return mixed
   */
  public function getWindowsPhoneUrl() {
    return $this->windows_phone_url;
  }

  /**
   * @param mixed $windows_phone_url
   */
  public function setWindowsPhoneUrl($windows_phone_url) {
    $this->windows_phone_url = $windows_phone_url;
  }

  /**
   * @return mixed
   */
  public function getWindowsPhoneAppId() {
    return $this->windows_phone_app_id;
  }

  /**
   * @param mixed $windows_phone_app_id
   */
  public function setWindowsPhoneAppId($windows_phone_app_id) {
    $this->windows_phone_app_id = $windows_phone_app_id;
  }

  /**
   * @return mixed
   */
  public function getWindowsPhoneAppName() {
    return $this->windows_phone_app_name;
  }

  /**
   * @param mixed $windows_phone_app_name
   */
  public function setWindowsPhoneAppName($windows_phone_app_name) {
    $this->windows_phone_app_name = $windows_phone_app_name;
  }

  /**
   * @return mixed
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * @param mixed $description
   */
  public function setDescription($description) {
    $this->description = $description;
  }

  /**
   * @return mixed
   */
  public function getGoogleProductCategory() {
    return $this->google_product_category;
  }

  /**
   * @param mixed $google_product_category
   */
  public function setGoogleProductCategory($google_product_category) {
    $this->google_product_category = $google_product_category;
  }

  /**
   * @return mixed
   */
  public function getProductType() {
    return $this->product_type;
  }

  /**
   * @param mixed $product_type
   */
  public function setProductType($product_type) {
    $this->product_type = $product_type;
  }

  /**
   * @return mixed
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * @param mixed $link
   */
  public function setLink($link) {
    $this->link = $link;
  }

  /**
   * @return mixed
   */
  public function getImageLink() {
    return $this->image_link;
  }

  /**
   * @param mixed $image_link
   */
  public function setImageLink($image_link) {
    $this->image_link = $image_link;
  }

  /**
   * @return mixed
   */
  public function getCondition() {
    return $this->condition;
  }

  /**
   * @param mixed $condition
   */
  public function setCondition($condition) {
    $this->condition = $condition;
  }

  /**
   * @return mixed
   */
  public function getAvailability() {
    return $this->availability;
  }

  /**
   * @param mixed $availability
   */
  public function setAvailability($availability) {
    $this->availability = $availability;
  }

  /**
   * @return mixed
   */
  public function getPrice() {
    return $this->price;
  }

  /**
   * @param mixed $price
   */
  public function setPrice($price) {
    $this->price = $price;
  }

  /**
   * @return mixed
   */
  public function getSalePrice() {
    return $this->sale_price;
  }

  /**
   * @param mixed $sale_price
   */
  public function setSalePrice($sale_price) {
    $this->sale_price = $sale_price;
  }

  /**
   * @return mixed
   */
  public function getSalePriceEffectiveDate() {
    return $this->sale_price_effective_date;
  }

  /**
   * @param mixed $sale_price_effective_date
   */
  public function setSalePriceEffectiveDate($sale_price_effective_date) {
    $this->sale_price_effective_date = $sale_price_effective_date;
  }

  /**
   * @return mixed
   */
  public function getGtin() {
    return $this->gtin;
  }

  /**
   * @param mixed $gtin
   */
  public function setGtin($gtin) {
    $this->gtin = $gtin;
  }

  /**
   * @return mixed
   */
  public function getBrand() {
    return $this->brand;
  }

  /**
   * @param mixed $brand
   */
  public function setBrand($brand) {
    $this->brand = $brand;
  }

  /**
   * @return mixed
   */
  public function getMpn() {
    return $this->mpn;
  }

  /**
   * @param mixed $mpn
   */
  public function setMpn($mpn) {
    $this->mpn = $mpn;
  }

  /**
   * @return mixed
   */
  public function getItemGroupId() {
    return $this->item_group_id;
  }

  /**
   * @param mixed $item_group_id
   */
  public function setItemGroupId($item_group_id) {
    $this->item_group_id = $item_group_id;
  }

  /**
   * @return mixed
   */
  public function getGender() {
    return $this->gender;
  }

  /**
   * @param mixed $gender
   */
  public function setGender($gender) {
    $this->gender = $gender;
  }

  /**
   * @return mixed
   */
  public function getAgeGroup() {
    return $this->age_group;
  }

  /**
   * @param mixed $age_group
   */
  public function setAgeGroup($age_group) {
    $this->age_group = $age_group;
  }

  /**
   * @return mixed
   */
  public function getColor() {
    return $this->color;
  }

  /**
   * @param mixed $color
   */
  public function setColor($color) {
    $this->color = $color;
  }

  /**
   * @return mixed
   */
  public function getSize() {
    return $this->size;
  }

  /**
   * @param mixed $size
   */
  public function setSize($size) {
    $this->size = $size;
  }

  /**
   * @return mixed
   */
  public function getShipping() {
    return $this->shipping;
  }

  /**
   * @param mixed $shipping
   */
  public function setShipping($shipping) {
    $this->shipping = $shipping;
  }

  /**
   * @return mixed
   */
  public function getCustomLabel0() {
    return $this->custom_label_0;
  }

  /**
   * @param mixed $custom_label_0
   */
  public function setCustomLabel0($custom_label_0) {
    $this->custom_label_0 = $custom_label_0;
  }
}
