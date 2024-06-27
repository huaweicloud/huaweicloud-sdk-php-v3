<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayErrorClassification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayErrorClassification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetName  目标库标识
    * errorType  异常SQL分类
    * errorCnt  异常SQL数量
    * errorTemplateCnt  异常SQL模板数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetName' => 'string',
            'errorType' => 'string',
            'errorCnt' => 'string',
            'errorTemplateCnt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetName  目标库标识
    * errorType  异常SQL分类
    * errorCnt  异常SQL数量
    * errorTemplateCnt  异常SQL模板数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetName' => null,
        'errorType' => null,
        'errorCnt' => null,
        'errorTemplateCnt' => null
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
    * targetName  目标库标识
    * errorType  异常SQL分类
    * errorCnt  异常SQL数量
    * errorTemplateCnt  异常SQL模板数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetName' => 'target_name',
            'errorType' => 'error_type',
            'errorCnt' => 'error_cnt',
            'errorTemplateCnt' => 'error_template_cnt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetName  目标库标识
    * errorType  异常SQL分类
    * errorCnt  异常SQL数量
    * errorTemplateCnt  异常SQL模板数量
    *
    * @var string[]
    */
    protected static $setters = [
            'targetName' => 'setTargetName',
            'errorType' => 'setErrorType',
            'errorCnt' => 'setErrorCnt',
            'errorTemplateCnt' => 'setErrorTemplateCnt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetName  目标库标识
    * errorType  异常SQL分类
    * errorCnt  异常SQL数量
    * errorTemplateCnt  异常SQL模板数量
    *
    * @var string[]
    */
    protected static $getters = [
            'targetName' => 'getTargetName',
            'errorType' => 'getErrorType',
            'errorCnt' => 'getErrorCnt',
            'errorTemplateCnt' => 'getErrorTemplateCnt'
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
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
        $this->container['errorType'] = isset($data['errorType']) ? $data['errorType'] : null;
        $this->container['errorCnt'] = isset($data['errorCnt']) ? $data['errorCnt'] : null;
        $this->container['errorTemplateCnt'] = isset($data['errorTemplateCnt']) ? $data['errorTemplateCnt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['errorType'] === null) {
            $invalidProperties[] = "'errorType' can't be null";
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
    * Gets targetName
    *  目标库标识
    *
    * @return string|null
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string|null $targetName 目标库标识
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
        return $this;
    }

    /**
    * Gets errorType
    *  异常SQL分类
    *
    * @return string
    */
    public function getErrorType()
    {
        return $this->container['errorType'];
    }

    /**
    * Sets errorType
    *
    * @param string $errorType 异常SQL分类
    *
    * @return $this
    */
    public function setErrorType($errorType)
    {
        $this->container['errorType'] = $errorType;
        return $this;
    }

    /**
    * Gets errorCnt
    *  异常SQL数量
    *
    * @return string|null
    */
    public function getErrorCnt()
    {
        return $this->container['errorCnt'];
    }

    /**
    * Sets errorCnt
    *
    * @param string|null $errorCnt 异常SQL数量
    *
    * @return $this
    */
    public function setErrorCnt($errorCnt)
    {
        $this->container['errorCnt'] = $errorCnt;
        return $this;
    }

    /**
    * Gets errorTemplateCnt
    *  异常SQL模板数量
    *
    * @return string|null
    */
    public function getErrorTemplateCnt()
    {
        return $this->container['errorTemplateCnt'];
    }

    /**
    * Sets errorTemplateCnt
    *
    * @param string|null $errorTemplateCnt 异常SQL模板数量
    *
    * @return $this
    */
    public function setErrorTemplateCnt($errorTemplateCnt)
    {
        $this->container['errorTemplateCnt'] = $errorTemplateCnt;
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

