<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Agency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Agency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agencyName  委托名称。
    * agencyId  委托ID。
    * errorMsg  异常信息。当委托创建失败时，返回的异常信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agencyName' => 'string',
            'agencyId' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agencyName  委托名称。
    * agencyId  委托ID。
    * errorMsg  异常信息。当委托创建失败时，返回的异常信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agencyName' => null,
        'agencyId' => null,
        'errorMsg' => null
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
    * agencyName  委托名称。
    * agencyId  委托ID。
    * errorMsg  异常信息。当委托创建失败时，返回的异常信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agencyName' => 'agency_name',
            'agencyId' => 'agency_id',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agencyName  委托名称。
    * agencyId  委托ID。
    * errorMsg  异常信息。当委托创建失败时，返回的异常信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'agencyName' => 'setAgencyName',
            'agencyId' => 'setAgencyId',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agencyName  委托名称。
    * agencyId  委托ID。
    * errorMsg  异常信息。当委托创建失败时，返回的异常信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'agencyName' => 'getAgencyName',
            'agencyId' => 'getAgencyId',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['agencyId'] = isset($data['agencyId']) ? $data['agencyId'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
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
    * Gets agencyName
    *  委托名称。
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName 委托名称。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets agencyId
    *  委托ID。
    *
    * @return string|null
    */
    public function getAgencyId()
    {
        return $this->container['agencyId'];
    }

    /**
    * Sets agencyId
    *
    * @param string|null $agencyId 委托ID。
    *
    * @return $this
    */
    public function setAgencyId($agencyId)
    {
        $this->container['agencyId'] = $agencyId;
        return $this;
    }

    /**
    * Gets errorMsg
    *  异常信息。当委托创建失败时，返回的异常信息。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 异常信息。当委托创建失败时，返回的异常信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

