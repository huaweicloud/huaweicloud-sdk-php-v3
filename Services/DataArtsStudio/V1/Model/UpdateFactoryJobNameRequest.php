<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFactoryJobNameRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFactoryJobNameRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  作业名
    * workspace  工作空间ID
    * contentType  有Body体的情况下必选，无Body体的情况下则无需填写和校验
    * authorization  使用AK/SK进行认证时该字段必选
    * host  使用AK/SK进行认证时该字段必选
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'workspace' => 'string',
            'contentType' => 'string',
            'authorization' => 'string',
            'host' => 'string',
            'body' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateFactoryJobNameRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  作业名
    * workspace  工作空间ID
    * contentType  有Body体的情况下必选，无Body体的情况下则无需填写和校验
    * authorization  使用AK/SK进行认证时该字段必选
    * host  使用AK/SK进行认证时该字段必选
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'workspace' => null,
        'contentType' => null,
        'authorization' => null,
        'host' => null,
        'body' => null
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
    * jobName  作业名
    * workspace  工作空间ID
    * contentType  有Body体的情况下必选，无Body体的情况下则无需填写和校验
    * authorization  使用AK/SK进行认证时该字段必选
    * host  使用AK/SK进行认证时该字段必选
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'workspace' => 'workspace',
            'contentType' => 'Content-Type',
            'authorization' => 'Authorization',
            'host' => 'Host',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  作业名
    * workspace  工作空间ID
    * contentType  有Body体的情况下必选，无Body体的情况下则无需填写和校验
    * authorization  使用AK/SK进行认证时该字段必选
    * host  使用AK/SK进行认证时该字段必选
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'workspace' => 'setWorkspace',
            'contentType' => 'setContentType',
            'authorization' => 'setAuthorization',
            'host' => 'setHost',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  作业名
    * workspace  工作空间ID
    * contentType  有Body体的情况下必选，无Body体的情况下则无需填写和校验
    * authorization  使用AK/SK进行认证时该字段必选
    * host  使用AK/SK进行认证时该字段必选
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'workspace' => 'getWorkspace',
            'contentType' => 'getContentType',
            'authorization' => 'getAuthorization',
            'host' => 'getHost',
            'body' => 'getBody'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
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
    * Gets jobName
    *  作业名
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业名
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets contentType
    *  有Body体的情况下必选，无Body体的情况下则无需填写和校验
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 有Body体的情况下必选，无Body体的情况下则无需填写和校验
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets authorization
    *  使用AK/SK进行认证时该字段必选
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK进行认证时该字段必选
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets host
    *  使用AK/SK进行认证时该字段必选
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 使用AK/SK进行认证时该字段必选
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateFactoryJobNameRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\UpdateFactoryJobNameRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

