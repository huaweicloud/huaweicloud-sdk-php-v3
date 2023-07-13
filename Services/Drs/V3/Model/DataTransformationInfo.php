<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataTransformationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataTransformationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    * dataTransformationObjectInfos  数据加工对象。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transformationInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\TransformationInfo',
            'configTransformation' => '\HuaweiCloud\SDK\Drs\V3\Model\ConfigTransformationVo',
            'dataTransformationObjectInfos' => '\HuaweiCloud\SDK\Drs\V3\Model\DataTransformationObjectVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    * dataTransformationObjectInfos  数据加工对象。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transformationInfo' => null,
        'configTransformation' => null,
        'dataTransformationObjectInfos' => null
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
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    * dataTransformationObjectInfos  数据加工对象。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transformationInfo' => 'transformation_info',
            'configTransformation' => 'config_transformation',
            'dataTransformationObjectInfos' => 'data_transformation_object_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    * dataTransformationObjectInfos  数据加工对象。
    *
    * @var string[]
    */
    protected static $setters = [
            'transformationInfo' => 'setTransformationInfo',
            'configTransformation' => 'setConfigTransformation',
            'dataTransformationObjectInfos' => 'setDataTransformationObjectInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transformationInfo  transformationInfo
    * configTransformation  configTransformation
    * dataTransformationObjectInfos  数据加工对象。
    *
    * @var string[]
    */
    protected static $getters = [
            'transformationInfo' => 'getTransformationInfo',
            'configTransformation' => 'getConfigTransformation',
            'dataTransformationObjectInfos' => 'getDataTransformationObjectInfos'
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
        $this->container['transformationInfo'] = isset($data['transformationInfo']) ? $data['transformationInfo'] : null;
        $this->container['configTransformation'] = isset($data['configTransformation']) ? $data['configTransformation'] : null;
        $this->container['dataTransformationObjectInfos'] = isset($data['dataTransformationObjectInfos']) ? $data['dataTransformationObjectInfos'] : null;
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
    * Gets transformationInfo
    *  transformationInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\TransformationInfo|null
    */
    public function getTransformationInfo()
    {
        return $this->container['transformationInfo'];
    }

    /**
    * Sets transformationInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\TransformationInfo|null $transformationInfo transformationInfo
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
    * Gets dataTransformationObjectInfos
    *  数据加工对象。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\DataTransformationObjectVO[]|null
    */
    public function getDataTransformationObjectInfos()
    {
        return $this->container['dataTransformationObjectInfos'];
    }

    /**
    * Sets dataTransformationObjectInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\DataTransformationObjectVO[]|null $dataTransformationObjectInfos 数据加工对象。
    *
    * @return $this
    */
    public function setDataTransformationObjectInfos($dataTransformationObjectInfos)
    {
        $this->container['dataTransformationObjectInfos'] = $dataTransformationObjectInfos;
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

