<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizeDataConnectionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizeDataConnectionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataConnectionId  需要授权的数据连接id。
    * workspaceId  需要授权的工作空间id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataConnectionId' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataConnectionId  需要授权的数据连接id。
    * workspaceId  需要授权的工作空间id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataConnectionId' => null,
        'workspaceId' => null
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
    * dataConnectionId  需要授权的数据连接id。
    * workspaceId  需要授权的工作空间id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataConnectionId' => 'data_connection_id',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataConnectionId  需要授权的数据连接id。
    * workspaceId  需要授权的工作空间id。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataConnectionId' => 'setDataConnectionId',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataConnectionId  需要授权的数据连接id。
    * workspaceId  需要授权的工作空间id。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataConnectionId' => 'getDataConnectionId',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['dataConnectionId'] = isset($data['dataConnectionId']) ? $data['dataConnectionId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataConnectionId'] === null) {
            $invalidProperties[] = "'dataConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['dataConnectionId']) > 4096)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['dataConnectionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 4096)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
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
    * Gets dataConnectionId
    *  需要授权的数据连接id。
    *
    * @return string
    */
    public function getDataConnectionId()
    {
        return $this->container['dataConnectionId'];
    }

    /**
    * Sets dataConnectionId
    *
    * @param string $dataConnectionId 需要授权的数据连接id。
    *
    * @return $this
    */
    public function setDataConnectionId($dataConnectionId)
    {
        $this->container['dataConnectionId'] = $dataConnectionId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  需要授权的工作空间id。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 需要授权的工作空间id。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

