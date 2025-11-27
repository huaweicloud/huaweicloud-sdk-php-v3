<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  Job类型
    * federationUid  联邦uid
    * resourceId  资源id
    * resourceName  资源名字
    * extendparam  扩展参数
    * subJobs  子Job
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'federationUid' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'extendparam' => 'string',
            'subJobs' => '\HuaweiCloud\SDK\Ucs\V1\Model\Job[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  Job类型
    * federationUid  联邦uid
    * resourceId  资源id
    * resourceName  资源名字
    * extendparam  扩展参数
    * subJobs  子Job
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'federationUid' => null,
        'resourceId' => null,
        'resourceName' => null,
        'extendparam' => null,
        'subJobs' => null
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
    * type  Job类型
    * federationUid  联邦uid
    * resourceId  资源id
    * resourceName  资源名字
    * extendparam  扩展参数
    * subJobs  子Job
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'federationUid' => 'federationUID',
            'resourceId' => 'resourceID',
            'resourceName' => 'resourceName',
            'extendparam' => 'extendparam',
            'subJobs' => 'subJobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  Job类型
    * federationUid  联邦uid
    * resourceId  资源id
    * resourceName  资源名字
    * extendparam  扩展参数
    * subJobs  子Job
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'federationUid' => 'setFederationUid',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'extendparam' => 'setExtendparam',
            'subJobs' => 'setSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  Job类型
    * federationUid  联邦uid
    * resourceId  资源id
    * resourceName  资源名字
    * extendparam  扩展参数
    * subJobs  子Job
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'federationUid' => 'getFederationUid',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'extendparam' => 'getExtendparam',
            'subJobs' => 'getSubJobs'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['federationUid'] = isset($data['federationUid']) ? $data['federationUid'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['extendparam'] = isset($data['extendparam']) ? $data['extendparam'] : null;
        $this->container['subJobs'] = isset($data['subJobs']) ? $data['subJobs'] : null;
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
    * Gets type
    *  Job类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Job类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets federationUid
    *  联邦uid
    *
    * @return string|null
    */
    public function getFederationUid()
    {
        return $this->container['federationUid'];
    }

    /**
    * Sets federationUid
    *
    * @param string|null $federationUid 联邦uid
    *
    * @return $this
    */
    public function setFederationUid($federationUid)
    {
        $this->container['federationUid'] = $federationUid;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名字
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名字
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets extendparam
    *  扩展参数
    *
    * @return string|null
    */
    public function getExtendparam()
    {
        return $this->container['extendparam'];
    }

    /**
    * Sets extendparam
    *
    * @param string|null $extendparam 扩展参数
    *
    * @return $this
    */
    public function setExtendparam($extendparam)
    {
        $this->container['extendparam'] = $extendparam;
        return $this;
    }

    /**
    * Gets subJobs
    *  子Job
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Job[]|null
    */
    public function getSubJobs()
    {
        return $this->container['subJobs'];
    }

    /**
    * Sets subJobs
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Job[]|null $subJobs 子Job
    *
    * @return $this
    */
    public function setSubJobs($subJobs)
    {
        $this->container['subJobs'] = $subJobs;
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

