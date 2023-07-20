<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobMapInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobMapInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldJobId  导入文件中的作业ID。
    * newJobId  导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    * remark  导入作业结果信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldJobId' => 'int',
            'newJobId' => 'int',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldJobId  导入文件中的作业ID。
    * newJobId  导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    * remark  导入作业结果信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldJobId' => 'int64',
        'newJobId' => 'int64',
        'remark' => null
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
    * oldJobId  导入文件中的作业ID。
    * newJobId  导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    * remark  导入作业结果信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldJobId' => 'old_job_id',
            'newJobId' => 'new_job_id',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldJobId  导入文件中的作业ID。
    * newJobId  导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    * remark  导入作业结果信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'oldJobId' => 'setOldJobId',
            'newJobId' => 'setNewJobId',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldJobId  导入文件中的作业ID。
    * newJobId  导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    * remark  导入作业结果信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'oldJobId' => 'getOldJobId',
            'newJobId' => 'getNewJobId',
            'remark' => 'getRemark'
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
        $this->container['oldJobId'] = isset($data['oldJobId']) ? $data['oldJobId'] : null;
        $this->container['newJobId'] = isset($data['newJobId']) ? $data['newJobId'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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
    * Gets oldJobId
    *  导入文件中的作业ID。
    *
    * @return int|null
    */
    public function getOldJobId()
    {
        return $this->container['oldJobId'];
    }

    /**
    * Sets oldJobId
    *
    * @param int|null $oldJobId 导入文件中的作业ID。
    *
    * @return $this
    */
    public function setOldJobId($oldJobId)
    {
        $this->container['oldJobId'] = $oldJobId;
        return $this;
    }

    /**
    * Gets newJobId
    *  导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    *
    * @return int|null
    */
    public function getNewJobId()
    {
        return $this->container['newJobId'];
    }

    /**
    * Sets newJobId
    *
    * @param int|null $newJobId 导入完成后作业ID，若is_cover=false，服务中已有同名的作业，则为-1。
    *
    * @return $this
    */
    public function setNewJobId($newJobId)
    {
        $this->container['newJobId'] = $newJobId;
        return $this;
    }

    /**
    * Gets remark
    *  导入作业结果信息。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 导入作业结果信息。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

