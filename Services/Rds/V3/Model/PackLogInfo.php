<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例id。  **约束限制**：  不涉及。
    * size  **参数解释**：  文件大小。  **约束限制**：  不涉及。
    * sizeUnit  **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    * status  **参数解释**：  状态。  **约束限制**：  不涉及。
    * queryStartTime  **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    * queryEndTime  **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    * fileName  **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'size' => 'double',
            'sizeUnit' => 'string',
            'status' => 'string',
            'queryStartTime' => 'int',
            'queryEndTime' => 'int',
            'fileName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例id。  **约束限制**：  不涉及。
    * size  **参数解释**：  文件大小。  **约束限制**：  不涉及。
    * sizeUnit  **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    * status  **参数解释**：  状态。  **约束限制**：  不涉及。
    * queryStartTime  **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    * queryEndTime  **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    * fileName  **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'size' => 'double',
        'sizeUnit' => null,
        'status' => null,
        'queryStartTime' => 'int64',
        'queryEndTime' => 'int64',
        'fileName' => null
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
    * id  **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例id。  **约束限制**：  不涉及。
    * size  **参数解释**：  文件大小。  **约束限制**：  不涉及。
    * sizeUnit  **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    * status  **参数解释**：  状态。  **约束限制**：  不涉及。
    * queryStartTime  **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    * queryEndTime  **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    * fileName  **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'size' => 'size',
            'sizeUnit' => 'size_unit',
            'status' => 'status',
            'queryStartTime' => 'query_start_time',
            'queryEndTime' => 'query_end_time',
            'fileName' => 'file_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例id。  **约束限制**：  不涉及。
    * size  **参数解释**：  文件大小。  **约束限制**：  不涉及。
    * sizeUnit  **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    * status  **参数解释**：  状态。  **约束限制**：  不涉及。
    * queryStartTime  **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    * queryEndTime  **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    * fileName  **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'size' => 'setSize',
            'sizeUnit' => 'setSizeUnit',
            'status' => 'setStatus',
            'queryStartTime' => 'setQueryStartTime',
            'queryEndTime' => 'setQueryEndTime',
            'fileName' => 'setFileName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例id。  **约束限制**：  不涉及。
    * size  **参数解释**：  文件大小。  **约束限制**：  不涉及。
    * sizeUnit  **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    * status  **参数解释**：  状态。  **约束限制**：  不涉及。
    * queryStartTime  **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    * queryEndTime  **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    * fileName  **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'size' => 'getSize',
            'sizeUnit' => 'getSizeUnit',
            'status' => 'getStatus',
            'queryStartTime' => 'getQueryStartTime',
            'queryEndTime' => 'getQueryEndTime',
            'fileName' => 'getFileName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sizeUnit'] = isset($data['sizeUnit']) ? $data['sizeUnit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['queryStartTime'] = isset($data['queryStartTime']) ? $data['queryStartTime'] : null;
        $this->container['queryEndTime'] = isset($data['queryEndTime']) ? $data['queryEndTime'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 1E+13)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1E+13.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sizeUnit']) && (mb_strlen($this->container['sizeUnit']) > 36)) {
                $invalidProperties[] = "invalid value for 'sizeUnit', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sizeUnit']) && (mb_strlen($this->container['sizeUnit']) < 0)) {
                $invalidProperties[] = "invalid value for 'sizeUnit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queryStartTime']) && ($this->container['queryStartTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'queryStartTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['queryStartTime']) && ($this->container['queryStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'queryStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queryEndTime']) && ($this->container['queryEndTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'queryEndTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['queryEndTime']) && ($this->container['queryEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'queryEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 36)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：  文件唯一ID标识。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例id。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  实例id。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：  文件大小。  **约束限制**：  不涉及。
    *
    * @return double|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double|null $size **参数解释**：  文件大小。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets sizeUnit
    *  **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getSizeUnit()
    {
        return $this->container['sizeUnit'];
    }

    /**
    * Sets sizeUnit
    *
    * @param string|null $sizeUnit **参数解释**：  文件大小单位。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setSizeUnit($sizeUnit)
    {
        $this->container['sizeUnit'] = $sizeUnit;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  状态。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：  状态。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets queryStartTime
    *  **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getQueryStartTime()
    {
        return $this->container['queryStartTime'];
    }

    /**
    * Sets queryStartTime
    *
    * @param int|null $queryStartTime **参数解释**：  合并时间段起始时间戳。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setQueryStartTime($queryStartTime)
    {
        $this->container['queryStartTime'] = $queryStartTime;
        return $this;
    }

    /**
    * Gets queryEndTime
    *  **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getQueryEndTime()
    {
        return $this->container['queryEndTime'];
    }

    /**
    * Sets queryEndTime
    *
    * @param int|null $queryEndTime **参数解释**：  合并时间段结束时间戳。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setQueryEndTime($queryEndTime)
    {
        $this->container['queryEndTime'] = $queryEndTime;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName **参数解释**：  文件名。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
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

