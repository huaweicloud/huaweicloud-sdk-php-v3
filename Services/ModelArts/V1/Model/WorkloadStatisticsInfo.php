<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadStatisticsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadStatisticsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * infer  旧版模型部署作业数量。
    * notebook  开发环境作业数量。
    * train  训练作业数量。
    * warmUpTask  权重预热作业数量。
    * xInfer  模型部署作业数量。
    * sum  所有作业总和。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'infer' => 'int',
            'notebook' => 'int',
            'train' => 'int',
            'warmUpTask' => 'int',
            'xInfer' => 'int',
            'sum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * infer  旧版模型部署作业数量。
    * notebook  开发环境作业数量。
    * train  训练作业数量。
    * warmUpTask  权重预热作业数量。
    * xInfer  模型部署作业数量。
    * sum  所有作业总和。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'infer' => null,
        'notebook' => null,
        'train' => null,
        'warmUpTask' => null,
        'xInfer' => null,
        'sum' => null
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
    * infer  旧版模型部署作业数量。
    * notebook  开发环境作业数量。
    * train  训练作业数量。
    * warmUpTask  权重预热作业数量。
    * xInfer  模型部署作业数量。
    * sum  所有作业总和。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'infer' => 'infer',
            'notebook' => 'notebook',
            'train' => 'train',
            'warmUpTask' => 'warmUpTask',
            'xInfer' => 'x-infer',
            'sum' => 'sum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * infer  旧版模型部署作业数量。
    * notebook  开发环境作业数量。
    * train  训练作业数量。
    * warmUpTask  权重预热作业数量。
    * xInfer  模型部署作业数量。
    * sum  所有作业总和。
    *
    * @var string[]
    */
    protected static $setters = [
            'infer' => 'setInfer',
            'notebook' => 'setNotebook',
            'train' => 'setTrain',
            'warmUpTask' => 'setWarmUpTask',
            'xInfer' => 'setXInfer',
            'sum' => 'setSum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * infer  旧版模型部署作业数量。
    * notebook  开发环境作业数量。
    * train  训练作业数量。
    * warmUpTask  权重预热作业数量。
    * xInfer  模型部署作业数量。
    * sum  所有作业总和。
    *
    * @var string[]
    */
    protected static $getters = [
            'infer' => 'getInfer',
            'notebook' => 'getNotebook',
            'train' => 'getTrain',
            'warmUpTask' => 'getWarmUpTask',
            'xInfer' => 'getXInfer',
            'sum' => 'getSum'
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
        $this->container['infer'] = isset($data['infer']) ? $data['infer'] : null;
        $this->container['notebook'] = isset($data['notebook']) ? $data['notebook'] : null;
        $this->container['train'] = isset($data['train']) ? $data['train'] : null;
        $this->container['warmUpTask'] = isset($data['warmUpTask']) ? $data['warmUpTask'] : null;
        $this->container['xInfer'] = isset($data['xInfer']) ? $data['xInfer'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
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
    * Gets infer
    *  旧版模型部署作业数量。
    *
    * @return int|null
    */
    public function getInfer()
    {
        return $this->container['infer'];
    }

    /**
    * Sets infer
    *
    * @param int|null $infer 旧版模型部署作业数量。
    *
    * @return $this
    */
    public function setInfer($infer)
    {
        $this->container['infer'] = $infer;
        return $this;
    }

    /**
    * Gets notebook
    *  开发环境作业数量。
    *
    * @return int|null
    */
    public function getNotebook()
    {
        return $this->container['notebook'];
    }

    /**
    * Sets notebook
    *
    * @param int|null $notebook 开发环境作业数量。
    *
    * @return $this
    */
    public function setNotebook($notebook)
    {
        $this->container['notebook'] = $notebook;
        return $this;
    }

    /**
    * Gets train
    *  训练作业数量。
    *
    * @return int|null
    */
    public function getTrain()
    {
        return $this->container['train'];
    }

    /**
    * Sets train
    *
    * @param int|null $train 训练作业数量。
    *
    * @return $this
    */
    public function setTrain($train)
    {
        $this->container['train'] = $train;
        return $this;
    }

    /**
    * Gets warmUpTask
    *  权重预热作业数量。
    *
    * @return int|null
    */
    public function getWarmUpTask()
    {
        return $this->container['warmUpTask'];
    }

    /**
    * Sets warmUpTask
    *
    * @param int|null $warmUpTask 权重预热作业数量。
    *
    * @return $this
    */
    public function setWarmUpTask($warmUpTask)
    {
        $this->container['warmUpTask'] = $warmUpTask;
        return $this;
    }

    /**
    * Gets xInfer
    *  模型部署作业数量。
    *
    * @return int|null
    */
    public function getXInfer()
    {
        return $this->container['xInfer'];
    }

    /**
    * Sets xInfer
    *
    * @param int|null $xInfer 模型部署作业数量。
    *
    * @return $this
    */
    public function setXInfer($xInfer)
    {
        $this->container['xInfer'] = $xInfer;
        return $this;
    }

    /**
    * Gets sum
    *  所有作业总和。
    *
    * @return int|null
    */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
    * Sets sum
    *
    * @param int|null $sum 所有作业总和。
    *
    * @return $this
    */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;
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

