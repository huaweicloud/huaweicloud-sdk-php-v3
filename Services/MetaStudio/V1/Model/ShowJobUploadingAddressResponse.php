<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobUploadingAddressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobUploadingAddressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * segmentUrl  segmentUrl
    * packageUrl  packageUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'segmentUrl' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRspSegmentUrl',
            'packageUrl' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRspPackageUrl',
            'authorizationLetterUploadingUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * segmentUrl  segmentUrl
    * packageUrl  packageUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'segmentUrl' => null,
        'packageUrl' => null,
        'authorizationLetterUploadingUrl' => null
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
    * segmentUrl  segmentUrl
    * packageUrl  packageUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'segmentUrl' => 'segment_url',
            'packageUrl' => 'package_url',
            'authorizationLetterUploadingUrl' => 'authorization_letter_uploading_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * segmentUrl  segmentUrl
    * packageUrl  packageUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'segmentUrl' => 'setSegmentUrl',
            'packageUrl' => 'setPackageUrl',
            'authorizationLetterUploadingUrl' => 'setAuthorizationLetterUploadingUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * segmentUrl  segmentUrl
    * packageUrl  packageUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'segmentUrl' => 'getSegmentUrl',
            'packageUrl' => 'getPackageUrl',
            'authorizationLetterUploadingUrl' => 'getAuthorizationLetterUploadingUrl'
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
        $this->container['segmentUrl'] = isset($data['segmentUrl']) ? $data['segmentUrl'] : null;
        $this->container['packageUrl'] = isset($data['packageUrl']) ? $data['packageUrl'] : null;
        $this->container['authorizationLetterUploadingUrl'] = isset($data['authorizationLetterUploadingUrl']) ? $data['authorizationLetterUploadingUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorizationLetterUploadingUrl']) && (mb_strlen($this->container['authorizationLetterUploadingUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'authorizationLetterUploadingUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['authorizationLetterUploadingUrl']) && (mb_strlen($this->container['authorizationLetterUploadingUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizationLetterUploadingUrl', the character length must be bigger than or equal to 1.";
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
    * Gets segmentUrl
    *  segmentUrl
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRspSegmentUrl|null
    */
    public function getSegmentUrl()
    {
        return $this->container['segmentUrl'];
    }

    /**
    * Sets segmentUrl
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRspSegmentUrl|null $segmentUrl segmentUrl
    *
    * @return $this
    */
    public function setSegmentUrl($segmentUrl)
    {
        $this->container['segmentUrl'] = $segmentUrl;
        return $this;
    }

    /**
    * Gets packageUrl
    *  packageUrl
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRspPackageUrl|null
    */
    public function getPackageUrl()
    {
        return $this->container['packageUrl'];
    }

    /**
    * Sets packageUrl
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShowJobUploadingAddressRspPackageUrl|null $packageUrl packageUrl
    *
    * @return $this
    */
    public function setPackageUrl($packageUrl)
    {
        $this->container['packageUrl'] = $packageUrl;
        return $this;
    }

    /**
    * Gets authorizationLetterUploadingUrl
    *  授权书的上传地址。
    *
    * @return string|null
    */
    public function getAuthorizationLetterUploadingUrl()
    {
        return $this->container['authorizationLetterUploadingUrl'];
    }

    /**
    * Sets authorizationLetterUploadingUrl
    *
    * @param string|null $authorizationLetterUploadingUrl 授权书的上传地址。
    *
    * @return $this
    */
    public function setAuthorizationLetterUploadingUrl($authorizationLetterUploadingUrl)
    {
        $this->container['authorizationLetterUploadingUrl'] = $authorizationLetterUploadingUrl;
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

