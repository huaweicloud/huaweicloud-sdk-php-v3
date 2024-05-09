<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteGraph2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteGraph2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * graphId  图ID。
    * keepBackup  删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    * deleteEip  是否同时删除EIP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'graphId' => 'string',
            'keepBackup' => 'bool',
            'deleteEip' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * graphId  图ID。
    * keepBackup  删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    * deleteEip  是否同时删除EIP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'graphId' => null,
        'keepBackup' => null,
        'deleteEip' => null
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
    * graphId  图ID。
    * keepBackup  删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    * deleteEip  是否同时删除EIP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'graphId' => 'graph_id',
            'keepBackup' => 'keep_backup',
            'deleteEip' => 'delete_eip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * graphId  图ID。
    * keepBackup  删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    * deleteEip  是否同时删除EIP。
    *
    * @var string[]
    */
    protected static $setters = [
            'graphId' => 'setGraphId',
            'keepBackup' => 'setKeepBackup',
            'deleteEip' => 'setDeleteEip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * graphId  图ID。
    * keepBackup  删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    * deleteEip  是否同时删除EIP。
    *
    * @var string[]
    */
    protected static $getters = [
            'graphId' => 'getGraphId',
            'keepBackup' => 'getKeepBackup',
            'deleteEip' => 'getDeleteEip'
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
        $this->container['graphId'] = isset($data['graphId']) ? $data['graphId'] : null;
        $this->container['keepBackup'] = isset($data['keepBackup']) ? $data['keepBackup'] : null;
        $this->container['deleteEip'] = isset($data['deleteEip']) ? $data['deleteEip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['graphId'] === null) {
            $invalidProperties[] = "'graphId' can't be null";
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
    * Gets graphId
    *  图ID。
    *
    * @return string
    */
    public function getGraphId()
    {
        return $this->container['graphId'];
    }

    /**
    * Sets graphId
    *
    * @param string $graphId 图ID。
    *
    * @return $this
    */
    public function setGraphId($graphId)
    {
        $this->container['graphId'] = $graphId;
        return $this;
    }

    /**
    * Gets keepBackup
    *  删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    *
    * @return bool|null
    */
    public function getKeepBackup()
    {
        return $this->container['keepBackup'];
    }

    /**
    * Sets keepBackup
    *
    * @param bool|null $keepBackup 删除图后是否保留备份，默认保留1个自动备份和2个手动备份。该查询参数为空时，表示不保留。
    *
    * @return $this
    */
    public function setKeepBackup($keepBackup)
    {
        $this->container['keepBackup'] = $keepBackup;
        return $this;
    }

    /**
    * Gets deleteEip
    *  是否同时删除EIP。
    *
    * @return bool|null
    */
    public function getDeleteEip()
    {
        return $this->container['deleteEip'];
    }

    /**
    * Sets deleteEip
    *
    * @param bool|null $deleteEip 是否同时删除EIP。
    *
    * @return $this
    */
    public function setDeleteEip($deleteEip)
    {
        $this->container['deleteEip'] = $deleteEip;
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

