<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GcParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GcParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleteUntagged  是否删除无tag的制品；默认为false，不删除无tag的制品。
    * workers  并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    * dryRun  是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleteUntagged' => 'bool',
            'workers' => 'int',
            'dryRun' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleteUntagged  是否删除无tag的制品；默认为false，不删除无tag的制品。
    * workers  并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    * dryRun  是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleteUntagged' => null,
        'workers' => null,
        'dryRun' => null
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
    * deleteUntagged  是否删除无tag的制品；默认为false，不删除无tag的制品。
    * workers  并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    * dryRun  是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleteUntagged' => 'delete_untagged',
            'workers' => 'workers',
            'dryRun' => 'dry_run'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleteUntagged  是否删除无tag的制品；默认为false，不删除无tag的制品。
    * workers  并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    * dryRun  是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @var string[]
    */
    protected static $setters = [
            'deleteUntagged' => 'setDeleteUntagged',
            'workers' => 'setWorkers',
            'dryRun' => 'setDryRun'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleteUntagged  是否删除无tag的制品；默认为false，不删除无tag的制品。
    * workers  并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    * dryRun  是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @var string[]
    */
    protected static $getters = [
            'deleteUntagged' => 'getDeleteUntagged',
            'workers' => 'getWorkers',
            'dryRun' => 'getDryRun'
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
        $this->container['deleteUntagged'] = isset($data['deleteUntagged']) ? $data['deleteUntagged'] : null;
        $this->container['workers'] = isset($data['workers']) ? $data['workers'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workers'] === null) {
            $invalidProperties[] = "'workers' can't be null";
        }
            if (($this->container['workers'] > 5)) {
                $invalidProperties[] = "invalid value for 'workers', must be smaller than or equal to 5.";
            }
            if (($this->container['workers'] < 1)) {
                $invalidProperties[] = "invalid value for 'workers', must be bigger than or equal to 1.";
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
    * Gets deleteUntagged
    *  是否删除无tag的制品；默认为false，不删除无tag的制品。
    *
    * @return bool|null
    */
    public function getDeleteUntagged()
    {
        return $this->container['deleteUntagged'];
    }

    /**
    * Sets deleteUntagged
    *
    * @param bool|null $deleteUntagged 是否删除无tag的制品；默认为false，不删除无tag的制品。
    *
    * @return $this
    */
    public function setDeleteUntagged($deleteUntagged)
    {
        $this->container['deleteUntagged'] = $deleteUntagged;
        return $this;
    }

    /**
    * Gets workers
    *  并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    *
    * @return int
    */
    public function getWorkers()
    {
        return $this->container['workers'];
    }

    /**
    * Sets workers
    *
    * @param int $workers 并行执行制品清理任务的工作者数量，最小值为1，最大值为5。
    *
    * @return $this
    */
    public function setWorkers($workers)
    {
        $this->container['workers'] = $workers;
        return $this;
    }

    /**
    * Gets dryRun
    *  是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 是否模拟执行任务；默认值为false，非模拟运行。
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
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

