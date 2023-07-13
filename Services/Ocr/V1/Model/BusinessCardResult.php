<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名列表。
    * title  职位头衔列表。
    * company  公司列表。
    * department  部门列表。
    * phone  联系方式列表。
    * address  地址列表。
    * email  邮箱列表。
    * fax  传真列表。
    * postcode  邮编列表。
    * website  公司网址列表。
    * extraInfoList  其余信息列表。
    * adjustedImage  返回矫正后的名片图像的BASE64编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string[]',
            'title' => 'string[]',
            'company' => 'string[]',
            'department' => 'string[]',
            'phone' => 'string[]',
            'address' => 'string[]',
            'email' => 'string[]',
            'fax' => 'string[]',
            'postcode' => 'string[]',
            'website' => 'string[]',
            'extraInfoList' => '\HuaweiCloud\SDK\Ocr\V1\Model\ExtraInfoList[]',
            'adjustedImage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名列表。
    * title  职位头衔列表。
    * company  公司列表。
    * department  部门列表。
    * phone  联系方式列表。
    * address  地址列表。
    * email  邮箱列表。
    * fax  传真列表。
    * postcode  邮编列表。
    * website  公司网址列表。
    * extraInfoList  其余信息列表。
    * adjustedImage  返回矫正后的名片图像的BASE64编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'title' => null,
        'company' => null,
        'department' => null,
        'phone' => null,
        'address' => null,
        'email' => null,
        'fax' => null,
        'postcode' => null,
        'website' => null,
        'extraInfoList' => null,
        'adjustedImage' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * name  姓名列表。
    * title  职位头衔列表。
    * company  公司列表。
    * department  部门列表。
    * phone  联系方式列表。
    * address  地址列表。
    * email  邮箱列表。
    * fax  传真列表。
    * postcode  邮编列表。
    * website  公司网址列表。
    * extraInfoList  其余信息列表。
    * adjustedImage  返回矫正后的名片图像的BASE64编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'title' => 'title',
            'company' => 'company',
            'department' => 'department',
            'phone' => 'phone',
            'address' => 'address',
            'email' => 'email',
            'fax' => 'fax',
            'postcode' => 'postcode',
            'website' => 'website',
            'extraInfoList' => 'extra_info_list',
            'adjustedImage' => 'adjusted_image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名列表。
    * title  职位头衔列表。
    * company  公司列表。
    * department  部门列表。
    * phone  联系方式列表。
    * address  地址列表。
    * email  邮箱列表。
    * fax  传真列表。
    * postcode  邮编列表。
    * website  公司网址列表。
    * extraInfoList  其余信息列表。
    * adjustedImage  返回矫正后的名片图像的BASE64编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'title' => 'setTitle',
            'company' => 'setCompany',
            'department' => 'setDepartment',
            'phone' => 'setPhone',
            'address' => 'setAddress',
            'email' => 'setEmail',
            'fax' => 'setFax',
            'postcode' => 'setPostcode',
            'website' => 'setWebsite',
            'extraInfoList' => 'setExtraInfoList',
            'adjustedImage' => 'setAdjustedImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名列表。
    * title  职位头衔列表。
    * company  公司列表。
    * department  部门列表。
    * phone  联系方式列表。
    * address  地址列表。
    * email  邮箱列表。
    * fax  传真列表。
    * postcode  邮编列表。
    * website  公司网址列表。
    * extraInfoList  其余信息列表。
    * adjustedImage  返回矫正后的名片图像的BASE64编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'title' => 'getTitle',
            'company' => 'getCompany',
            'department' => 'getDepartment',
            'phone' => 'getPhone',
            'address' => 'getAddress',
            'email' => 'getEmail',
            'fax' => 'getFax',
            'postcode' => 'getPostcode',
            'website' => 'getWebsite',
            'extraInfoList' => 'getExtraInfoList',
            'adjustedImage' => 'getAdjustedImage'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['extraInfoList'] = isset($data['extraInfoList']) ? $data['extraInfoList'] : null;
        $this->container['adjustedImage'] = isset($data['adjustedImage']) ? $data['adjustedImage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets name
    *  姓名列表。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 姓名列表。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets title
    *  职位头衔列表。
    *
    * @return string[]|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string[]|null $title 职位头衔列表。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets company
    *  公司列表。
    *
    * @return string[]|null
    */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
    * Sets company
    *
    * @param string[]|null $company 公司列表。
    *
    * @return $this
    */
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }

    /**
    * Gets department
    *  部门列表。
    *
    * @return string[]|null
    */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
    * Sets department
    *
    * @param string[]|null $department 部门列表。
    *
    * @return $this
    */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;
        return $this;
    }

    /**
    * Gets phone
    *  联系方式列表。
    *
    * @return string[]|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string[]|null $phone 联系方式列表。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets address
    *  地址列表。
    *
    * @return string[]|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string[]|null $address 地址列表。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets email
    *  邮箱列表。
    *
    * @return string[]|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string[]|null $email 邮箱列表。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets fax
    *  传真列表。
    *
    * @return string[]|null
    */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
    * Sets fax
    *
    * @param string[]|null $fax 传真列表。
    *
    * @return $this
    */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;
        return $this;
    }

    /**
    * Gets postcode
    *  邮编列表。
    *
    * @return string[]|null
    */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
    * Sets postcode
    *
    * @param string[]|null $postcode 邮编列表。
    *
    * @return $this
    */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;
        return $this;
    }

    /**
    * Gets website
    *  公司网址列表。
    *
    * @return string[]|null
    */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
    * Sets website
    *
    * @param string[]|null $website 公司网址列表。
    *
    * @return $this
    */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;
        return $this;
    }

    /**
    * Gets extraInfoList
    *  其余信息列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ExtraInfoList[]|null
    */
    public function getExtraInfoList()
    {
        return $this->container['extraInfoList'];
    }

    /**
    * Sets extraInfoList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ExtraInfoList[]|null $extraInfoList 其余信息列表。
    *
    * @return $this
    */
    public function setExtraInfoList($extraInfoList)
    {
        $this->container['extraInfoList'] = $extraInfoList;
        return $this;
    }

    /**
    * Gets adjustedImage
    *  返回矫正后的名片图像的BASE64编码。
    *
    * @return string|null
    */
    public function getAdjustedImage()
    {
        return $this->container['adjustedImage'];
    }

    /**
    * Sets adjustedImage
    *
    * @param string|null $adjustedImage 返回矫正后的名片图像的BASE64编码。
    *
    * @return $this
    */
    public function setAdjustedImage($adjustedImage)
    {
        $this->container['adjustedImage'] = $adjustedImage;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

