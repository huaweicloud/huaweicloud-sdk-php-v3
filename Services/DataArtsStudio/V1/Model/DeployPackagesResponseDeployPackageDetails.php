<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployPackagesResponseDeployPackageDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployPackagesResponse_deploy_package_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * asySubtaskNum  总的异步执行的子任务个数
    * asyTaskId  异步作业id，返回给前台轮询结果
    * packageId  发布包ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'asySubtaskNum' => 'int',
            'asyTaskId' => 'string',
            'packageId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * asySubtaskNum  总的异步执行的子任务个数
    * asyTaskId  异步作业id，返回给前台轮询结果
    * packageId  发布包ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'asySubtaskNum' => 'int32',
        'asyTaskId' => null,
        'packageId' => 'int64'
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
    * asySubtaskNum  总的异步执行的子任务个数
    * asyTaskId  异步作业id，返回给前台轮询结果
    * packageId  发布包ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'asySubtaskNum' => 'asy_subtask_num',
            'asyTaskId' => 'asy_task_id',
            'packageId' => 'package_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * asySubtaskNum  总的异步执行的子任务个数
    * asyTaskId  异步作业id，返回给前台轮询结果
    * packageId  发布包ID
    *
    * @var string[]
    */
    protected static $setters = [
            'asySubtaskNum' => 'setAsySubtaskNum',
            'asyTaskId' => 'setAsyTaskId',
            'packageId' => 'setPackageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * asySubtaskNum  总的异步执行的子任务个数
    * asyTaskId  异步作业id，返回给前台轮询结果
    * packageId  发布包ID
    *
    * @var string[]
    */
    protected static $getters = [
            'asySubtaskNum' => 'getAsySubtaskNum',
            'asyTaskId' => 'getAsyTaskId',
            'packageId' => 'getPackageId'
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
        $this->container['asySubtaskNum'] = isset($data['asySubtaskNum']) ? $data['asySubtaskNum'] : null;
        $this->container['asyTaskId'] = isset($data['asyTaskId']) ? $data['asyTaskId'] : null;
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
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
    * Gets asySubtaskNum
    *  总的异步执行的子任务个数
    *
    * @return int|null
    */
    public function getAsySubtaskNum()
    {
        return $this->container['asySubtaskNum'];
    }

    /**
    * Sets asySubtaskNum
    *
    * @param int|null $asySubtaskNum 总的异步执行的子任务个数
    *
    * @return $this
    */
    public function setAsySubtaskNum($asySubtaskNum)
    {
        $this->container['asySubtaskNum'] = $asySubtaskNum;
        return $this;
    }

    /**
    * Gets asyTaskId
    *  异步作业id，返回给前台轮询结果
    *
    * @return string|null
    */
    public function getAsyTaskId()
    {
        return $this->container['asyTaskId'];
    }

    /**
    * Sets asyTaskId
    *
    * @param string|null $asyTaskId 异步作业id，返回给前台轮询结果
    *
    * @return $this
    */
    public function setAsyTaskId($asyTaskId)
    {
        $this->container['asyTaskId'] = $asyTaskId;
        return $this;
    }

    /**
    * Gets packageId
    *  发布包ID
    *
    * @return int|null
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param int|null $packageId 发布包ID
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
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

