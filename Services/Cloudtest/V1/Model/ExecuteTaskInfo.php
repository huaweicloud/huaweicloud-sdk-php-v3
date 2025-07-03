<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述
    * releaseDev  发布版本号
    * resultCode  结果Code
    * testResultUri  任务执行结果Uri
    * statusCode  状态Code
    * versionUri  分支/迭代uri
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'releaseDev' => 'string',
            'resultCode' => 'string',
            'testResultUri' => 'string',
            'statusCode' => 'string',
            'versionUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述
    * releaseDev  发布版本号
    * resultCode  结果Code
    * testResultUri  任务执行结果Uri
    * statusCode  状态Code
    * versionUri  分支/迭代uri
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'releaseDev' => null,
        'resultCode' => null,
        'testResultUri' => null,
        'statusCode' => null,
        'versionUri' => null
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
    * description  描述
    * releaseDev  发布版本号
    * resultCode  结果Code
    * testResultUri  任务执行结果Uri
    * statusCode  状态Code
    * versionUri  分支/迭代uri
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'releaseDev' => 'release_dev',
            'resultCode' => 'result_code',
            'testResultUri' => 'test_result_uri',
            'statusCode' => 'status_code',
            'versionUri' => 'version_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述
    * releaseDev  发布版本号
    * resultCode  结果Code
    * testResultUri  任务执行结果Uri
    * statusCode  状态Code
    * versionUri  分支/迭代uri
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'releaseDev' => 'setReleaseDev',
            'resultCode' => 'setResultCode',
            'testResultUri' => 'setTestResultUri',
            'statusCode' => 'setStatusCode',
            'versionUri' => 'setVersionUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述
    * releaseDev  发布版本号
    * resultCode  结果Code
    * testResultUri  任务执行结果Uri
    * statusCode  状态Code
    * versionUri  分支/迭代uri
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'releaseDev' => 'getReleaseDev',
            'resultCode' => 'getResultCode',
            'testResultUri' => 'getTestResultUri',
            'statusCode' => 'getStatusCode',
            'versionUri' => 'getVersionUri'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['testResultUri'] = isset($data['testResultUri']) ? $data['testResultUri'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
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
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets releaseDev
    *  发布版本号
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 发布版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets resultCode
    *  结果Code
    *
    * @return string|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param string|null $resultCode 结果Code
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets testResultUri
    *  任务执行结果Uri
    *
    * @return string|null
    */
    public function getTestResultUri()
    {
        return $this->container['testResultUri'];
    }

    /**
    * Sets testResultUri
    *
    * @param string|null $testResultUri 任务执行结果Uri
    *
    * @return $this
    */
    public function setTestResultUri($testResultUri)
    {
        $this->container['testResultUri'] = $testResultUri;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态Code
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 状态Code
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支/迭代uri
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 分支/迭代uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
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

