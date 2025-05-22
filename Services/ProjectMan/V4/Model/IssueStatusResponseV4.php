<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueStatusResponseV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueStatusResponseV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * closedNum  已关闭数量
    * newNum  新建的数量
    * processNum  开发中的数量
    * rejectedNum  已拒绝数量
    * solvedNum  已解决数量
    * testNum  测试中的数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'closedNum' => 'int',
            'newNum' => 'int',
            'processNum' => 'int',
            'rejectedNum' => 'int',
            'solvedNum' => 'int',
            'testNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * closedNum  已关闭数量
    * newNum  新建的数量
    * processNum  开发中的数量
    * rejectedNum  已拒绝数量
    * solvedNum  已解决数量
    * testNum  测试中的数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'closedNum' => 'int32',
        'newNum' => 'int32',
        'processNum' => 'int32',
        'rejectedNum' => 'int32',
        'solvedNum' => 'int32',
        'testNum' => 'int32'
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
    * closedNum  已关闭数量
    * newNum  新建的数量
    * processNum  开发中的数量
    * rejectedNum  已拒绝数量
    * solvedNum  已解决数量
    * testNum  测试中的数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'closedNum' => 'closed_num',
            'newNum' => 'new_num',
            'processNum' => 'process_num',
            'rejectedNum' => 'rejected_num',
            'solvedNum' => 'solved_num',
            'testNum' => 'test_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * closedNum  已关闭数量
    * newNum  新建的数量
    * processNum  开发中的数量
    * rejectedNum  已拒绝数量
    * solvedNum  已解决数量
    * testNum  测试中的数量
    *
    * @var string[]
    */
    protected static $setters = [
            'closedNum' => 'setClosedNum',
            'newNum' => 'setNewNum',
            'processNum' => 'setProcessNum',
            'rejectedNum' => 'setRejectedNum',
            'solvedNum' => 'setSolvedNum',
            'testNum' => 'setTestNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * closedNum  已关闭数量
    * newNum  新建的数量
    * processNum  开发中的数量
    * rejectedNum  已拒绝数量
    * solvedNum  已解决数量
    * testNum  测试中的数量
    *
    * @var string[]
    */
    protected static $getters = [
            'closedNum' => 'getClosedNum',
            'newNum' => 'getNewNum',
            'processNum' => 'getProcessNum',
            'rejectedNum' => 'getRejectedNum',
            'solvedNum' => 'getSolvedNum',
            'testNum' => 'getTestNum'
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
        $this->container['closedNum'] = isset($data['closedNum']) ? $data['closedNum'] : null;
        $this->container['newNum'] = isset($data['newNum']) ? $data['newNum'] : null;
        $this->container['processNum'] = isset($data['processNum']) ? $data['processNum'] : null;
        $this->container['rejectedNum'] = isset($data['rejectedNum']) ? $data['rejectedNum'] : null;
        $this->container['solvedNum'] = isset($data['solvedNum']) ? $data['solvedNum'] : null;
        $this->container['testNum'] = isset($data['testNum']) ? $data['testNum'] : null;
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
    * Gets closedNum
    *  已关闭数量
    *
    * @return int|null
    */
    public function getClosedNum()
    {
        return $this->container['closedNum'];
    }

    /**
    * Sets closedNum
    *
    * @param int|null $closedNum 已关闭数量
    *
    * @return $this
    */
    public function setClosedNum($closedNum)
    {
        $this->container['closedNum'] = $closedNum;
        return $this;
    }

    /**
    * Gets newNum
    *  新建的数量
    *
    * @return int|null
    */
    public function getNewNum()
    {
        return $this->container['newNum'];
    }

    /**
    * Sets newNum
    *
    * @param int|null $newNum 新建的数量
    *
    * @return $this
    */
    public function setNewNum($newNum)
    {
        $this->container['newNum'] = $newNum;
        return $this;
    }

    /**
    * Gets processNum
    *  开发中的数量
    *
    * @return int|null
    */
    public function getProcessNum()
    {
        return $this->container['processNum'];
    }

    /**
    * Sets processNum
    *
    * @param int|null $processNum 开发中的数量
    *
    * @return $this
    */
    public function setProcessNum($processNum)
    {
        $this->container['processNum'] = $processNum;
        return $this;
    }

    /**
    * Gets rejectedNum
    *  已拒绝数量
    *
    * @return int|null
    */
    public function getRejectedNum()
    {
        return $this->container['rejectedNum'];
    }

    /**
    * Sets rejectedNum
    *
    * @param int|null $rejectedNum 已拒绝数量
    *
    * @return $this
    */
    public function setRejectedNum($rejectedNum)
    {
        $this->container['rejectedNum'] = $rejectedNum;
        return $this;
    }

    /**
    * Gets solvedNum
    *  已解决数量
    *
    * @return int|null
    */
    public function getSolvedNum()
    {
        return $this->container['solvedNum'];
    }

    /**
    * Sets solvedNum
    *
    * @param int|null $solvedNum 已解决数量
    *
    * @return $this
    */
    public function setSolvedNum($solvedNum)
    {
        $this->container['solvedNum'] = $solvedNum;
        return $this;
    }

    /**
    * Gets testNum
    *  测试中的数量
    *
    * @return int|null
    */
    public function getTestNum()
    {
        return $this->container['testNum'];
    }

    /**
    * Sets testNum
    *
    * @param int|null $testNum 测试中的数量
    *
    * @return $this
    */
    public function setTestNum($testNum)
    {
        $this->container['testNum'] = $testNum;
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

