<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSpaceAnalysisTaskBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSpaceAnalysisTaskBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operate  操作类型
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operate' => 'string',
            'datastoreType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operate  操作类型
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operate' => null,
        'datastoreType' => null
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
    * operate  操作类型
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operate' => 'operate',
            'datastoreType' => 'datastore_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operate  操作类型
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $setters = [
            'operate' => 'setOperate',
            'datastoreType' => 'setDatastoreType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operate  操作类型
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $getters = [
            'operate' => 'getOperate',
            'datastoreType' => 'getDatastoreType'
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
    const OPERATE_REANALYSIS = 'reanalysis';
    const DATASTORE_TYPE_MY_SQL = 'MySQL';
    const DATASTORE_TYPE_GAUSS_DB_FOR_MY_SQL = 'GaussDB(for MySQL)';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateAllowableValues()
    {
        return [
            self::OPERATE_REANALYSIS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatastoreTypeAllowableValues()
    {
        return [
            self::DATASTORE_TYPE_MY_SQL,
            self::DATASTORE_TYPE_GAUSS_DB_FOR_MY_SQL,
        ];
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
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operate'] === null) {
            $invalidProperties[] = "'operate' can't be null";
        }
            $allowedValues = $this->getOperateAllowableValues();
                if (!is_null($this->container['operate']) && !in_array($this->container['operate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            $allowedValues = $this->getDatastoreTypeAllowableValues();
                if (!is_null($this->container['datastoreType']) && !in_array($this->container['datastoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datastoreType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets operate
    *  操作类型
    *
    * @return string
    */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
    * Sets operate
    *
    * @param string $operate 操作类型
    *
    * @return $this
    */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
        return $this;
    }

    /**
    * Gets datastoreType
    *  引擎类型
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 引擎类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
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

