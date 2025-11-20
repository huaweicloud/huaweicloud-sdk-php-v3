<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadSchemaMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadSchemaMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compressedDatabasesInfo  逻辑库信息。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compressedDatabasesInfo' => 'string',
            'dataNodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\DnInstanceInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compressedDatabasesInfo  逻辑库信息。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compressedDatabasesInfo' => null,
        'dataNodes' => null
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
    * compressedDatabasesInfo  逻辑库信息。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compressedDatabasesInfo' => 'compressed_databases_info',
            'dataNodes' => 'data_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compressedDatabasesInfo  逻辑库信息。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'compressedDatabasesInfo' => 'setCompressedDatabasesInfo',
            'dataNodes' => 'setDataNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compressedDatabasesInfo  逻辑库信息。
    * dataNodes  关联的后端DN信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'compressedDatabasesInfo' => 'getCompressedDatabasesInfo',
            'dataNodes' => 'getDataNodes'
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
        $this->container['compressedDatabasesInfo'] = isset($data['compressedDatabasesInfo']) ? $data['compressedDatabasesInfo'] : null;
        $this->container['dataNodes'] = isset($data['dataNodes']) ? $data['dataNodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['compressedDatabasesInfo']) && (mb_strlen($this->container['compressedDatabasesInfo']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'compressedDatabasesInfo', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['compressedDatabasesInfo']) && (mb_strlen($this->container['compressedDatabasesInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'compressedDatabasesInfo', the character length must be bigger than or equal to 1.";
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
    * Gets compressedDatabasesInfo
    *  逻辑库信息。
    *
    * @return string|null
    */
    public function getCompressedDatabasesInfo()
    {
        return $this->container['compressedDatabasesInfo'];
    }

    /**
    * Sets compressedDatabasesInfo
    *
    * @param string|null $compressedDatabasesInfo 逻辑库信息。
    *
    * @return $this
    */
    public function setCompressedDatabasesInfo($compressedDatabasesInfo)
    {
        $this->container['compressedDatabasesInfo'] = $compressedDatabasesInfo;
        return $this;
    }

    /**
    * Gets dataNodes
    *  关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DnInstanceInfo[]|null
    */
    public function getDataNodes()
    {
        return $this->container['dataNodes'];
    }

    /**
    * Sets dataNodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DnInstanceInfo[]|null $dataNodes 关联的后端DN信息。
    *
    * @return $this
    */
    public function setDataNodes($dataNodes)
    {
        $this->container['dataNodes'] = $dataNodes;
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

