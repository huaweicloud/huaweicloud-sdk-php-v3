<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobUploadingAddressRspPackageUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobUploadingAddressRsp_package_url';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trainingDataUploadingUrl  上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trainingDataUploadingUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trainingDataUploadingUrl  上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trainingDataUploadingUrl' => null
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
    * trainingDataUploadingUrl  上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trainingDataUploadingUrl' => 'training_data_uploading_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trainingDataUploadingUrl  上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @var string[]
    */
    protected static $setters = [
            'trainingDataUploadingUrl' => 'setTrainingDataUploadingUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trainingDataUploadingUrl  上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @var string[]
    */
    protected static $getters = [
            'trainingDataUploadingUrl' => 'getTrainingDataUploadingUrl'
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
        $this->container['trainingDataUploadingUrl'] = isset($data['trainingDataUploadingUrl']) ? $data['trainingDataUploadingUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['trainingDataUploadingUrl']) && (mb_strlen($this->container['trainingDataUploadingUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'trainingDataUploadingUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['trainingDataUploadingUrl']) && (mb_strlen($this->container['trainingDataUploadingUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'trainingDataUploadingUrl', the character length must be bigger than or equal to 1.";
            }
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
    * Gets trainingDataUploadingUrl
    *  上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @return string|null
    */
    public function getTrainingDataUploadingUrl()
    {
        return $this->container['trainingDataUploadingUrl'];
    }

    /**
    * Sets trainingDataUploadingUrl
    *
    * @param string|null $trainingDataUploadingUrl 上传的训练数据地址,用户需要将训练数据打成zip包后上传到该url。 > * 通过该obs地址上传时需要设置content-type为application/zip
    *
    * @return $this
    */
    public function setTrainingDataUploadingUrl($trainingDataUploadingUrl)
    {
        $this->container['trainingDataUploadingUrl'] = $trainingDataUploadingUrl;
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

