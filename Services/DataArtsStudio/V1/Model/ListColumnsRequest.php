<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListColumnsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListColumnsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  数据所在空间的id值
    * connectionId  数据连接id
    * tableId  表id
    * limit  数据条数限制
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'connectionId' => 'string',
            'tableId' => 'string',
            'limit' => 'string',
            'offset' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  数据所在空间的id值
    * connectionId  数据连接id
    * tableId  表id
    * limit  数据条数限制
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'connectionId' => null,
        'tableId' => null,
        'limit' => null,
        'offset' => null
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
    * workspace  数据所在空间的id值
    * connectionId  数据连接id
    * tableId  表id
    * limit  数据条数限制
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'connectionId' => 'connection_id',
            'tableId' => 'table_id',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  数据所在空间的id值
    * connectionId  数据连接id
    * tableId  表id
    * limit  数据条数限制
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'connectionId' => 'setConnectionId',
            'tableId' => 'setTableId',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  数据所在空间的id值
    * connectionId  数据连接id
    * tableId  表id
    * limit  数据条数限制
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'connectionId' => 'getConnectionId',
            'tableId' => 'getTableId',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
        }
            if ((mb_strlen($this->container['connectionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['connectionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['tableId'] === null) {
            $invalidProperties[] = "'tableId' can't be null";
        }
            if ((mb_strlen($this->container['tableId']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['tableId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 16)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 1)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && (mb_strlen($this->container['offset']) > 16)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['offset']) && (mb_strlen($this->container['offset']) < 1)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be bigger than or equal to 1.";
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
    * Gets workspace
    *  数据所在空间的id值
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 数据所在空间的id值
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets connectionId
    *  数据连接id
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 数据连接id
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets tableId
    *  表id
    *
    * @return string
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string $tableId 表id
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets limit
    *  数据条数限制
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 数据条数限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

