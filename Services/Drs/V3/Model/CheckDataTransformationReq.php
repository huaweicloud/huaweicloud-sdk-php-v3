<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckDataTransformationReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckDataTransformationReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id
    * objectInfo  对象信息，生成加工规则时需要填写。
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'objectInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectVO[]',
            'transformationInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\TransformationInfo',
            'configTransformation' => '\HuaweiCloud\SDK\Drs\V3\Model\ConfigTransformationVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id
    * objectInfo  对象信息，生成加工规则时需要填写。
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'objectInfo' => null,
        'transformationInfo' => null,
        'configTransformation' => null
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
    * jobId  任务id
    * objectInfo  对象信息，生成加工规则时需要填写。
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'objectInfo' => 'object_info',
            'transformationInfo' => 'transformation_info',
            'configTransformation' => 'config_transformation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id
    * objectInfo  对象信息，生成加工规则时需要填写。
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'objectInfo' => 'setObjectInfo',
            'transformationInfo' => 'setTransformationInfo',
            'configTransformation' => 'setConfigTransformation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id
    * objectInfo  对象信息，生成加工规则时需要填写。
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'objectInfo' => 'getObjectInfo',
            'transformationInfo' => 'getTransformationInfo',
            'configTransformation' => 'getConfigTransformation'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['objectInfo'] = isset($data['objectInfo']) ? $data['objectInfo'] : null;
        $this->container['transformationInfo'] = isset($data['transformationInfo']) ? $data['transformationInfo'] : null;
        $this->container['configTransformation'] = isset($data['configTransformation']) ? $data['configTransformation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['transformationInfo'] === null) {
            $invalidProperties[] = "'transformationInfo' can't be null";
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
    * Gets jobId
    *  任务id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets objectInfo
    *  对象信息，生成加工规则时需要填写。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectVO[]|null
    */
    public function getObjectInfo()
    {
        return $this->container['objectInfo'];
    }

    /**
    * Sets objectInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectVO[]|null $objectInfo 对象信息，生成加工规则时需要填写。
    *
    * @return $this
    */
    public function setObjectInfo($objectInfo)
    {
        $this->container['objectInfo'] = $objectInfo;
        return $this;
    }

    /**
    * Gets transformationInfo
    *  transformationInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\TransformationInfo
    */
    public function getTransformationInfo()
    {
        return $this->container['transformationInfo'];
    }

    /**
    * Sets transformationInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\TransformationInfo $transformationInfo transformationInfo
    *
    * @return $this
    */
    public function setTransformationInfo($transformationInfo)
    {
        $this->container['transformationInfo'] = $transformationInfo;
        return $this;
    }

    /**
    * Gets configTransformation
    *  configTransformation
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ConfigTransformationVo|null
    */
    public function getConfigTransformation()
    {
        return $this->container['configTransformation'];
    }

    /**
    * Sets configTransformation
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ConfigTransformationVo|null $configTransformation configTransformation
    *
    * @return $this
    */
    public function setConfigTransformation($configTransformation)
    {
        $this->container['configTransformation'] = $configTransformation;
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

