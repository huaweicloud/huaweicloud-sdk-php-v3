<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommandTimeTakenList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommandTimeTakenList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  执行命令的总次数
    * totalUsecSum  执行命令的总耗时
    * result  命令耗时统计结果
    * commandList  命令耗时统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'totalUsecSum' => 'double',
            'result' => 'string',
            'commandList' => '\HuaweiCloud\SDK\Dcs\V2\Model\CommandTimeTaken[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  执行命令的总次数
    * totalUsecSum  执行命令的总耗时
    * result  命令耗时统计结果
    * commandList  命令耗时统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'totalUsecSum' => 'double',
        'result' => null,
        'commandList' => null
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
    * totalNum  执行命令的总次数
    * totalUsecSum  执行命令的总耗时
    * result  命令耗时统计结果
    * commandList  命令耗时统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'totalUsecSum' => 'total_usec_sum',
            'result' => 'result',
            'commandList' => 'command_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  执行命令的总次数
    * totalUsecSum  执行命令的总耗时
    * result  命令耗时统计结果
    * commandList  命令耗时统计
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'totalUsecSum' => 'setTotalUsecSum',
            'result' => 'setResult',
            'commandList' => 'setCommandList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  执行命令的总次数
    * totalUsecSum  执行命令的总耗时
    * result  命令耗时统计结果
    * commandList  命令耗时统计
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'totalUsecSum' => 'getTotalUsecSum',
            'result' => 'getResult',
            'commandList' => 'getCommandList'
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
    const RESULT_SUCCEED = 'succeed';
    const RESULT_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCEED,
            self::RESULT_FAILED,
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['totalUsecSum'] = isset($data['totalUsecSum']) ? $data['totalUsecSum'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['commandList'] = isset($data['commandList']) ? $data['commandList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['totalNum'] === null) {
            $invalidProperties[] = "'totalNum' can't be null";
        }
        if ($this->container['totalUsecSum'] === null) {
            $invalidProperties[] = "'totalUsecSum' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['commandList'] === null) {
            $invalidProperties[] = "'commandList' can't be null";
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
    * Gets totalNum
    *  执行命令的总次数
    *
    * @return int
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int $totalNum 执行命令的总次数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets totalUsecSum
    *  执行命令的总耗时
    *
    * @return double
    */
    public function getTotalUsecSum()
    {
        return $this->container['totalUsecSum'];
    }

    /**
    * Sets totalUsecSum
    *
    * @param double $totalUsecSum 执行命令的总耗时
    *
    * @return $this
    */
    public function setTotalUsecSum($totalUsecSum)
    {
        $this->container['totalUsecSum'] = $totalUsecSum;
        return $this;
    }

    /**
    * Gets result
    *  命令耗时统计结果
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 命令耗时统计结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets commandList
    *  命令耗时统计
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\CommandTimeTaken[]
    */
    public function getCommandList()
    {
        return $this->container['commandList'];
    }

    /**
    * Sets commandList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\CommandTimeTaken[] $commandList 命令耗时统计
    *
    * @return $this
    */
    public function setCommandList($commandList)
    {
        $this->container['commandList'] = $commandList;
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

