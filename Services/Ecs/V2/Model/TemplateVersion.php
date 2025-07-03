<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateData  templateData
    * versionNumber  版本号
    * versionId  版本id
    * versionDescription  版本描述
    * createdAt  创建时间
    * launchTemplateId  模板id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateData' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateData',
            'versionNumber' => 'int',
            'versionId' => 'string',
            'versionDescription' => 'string',
            'createdAt' => 'string',
            'launchTemplateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateData  templateData
    * versionNumber  版本号
    * versionId  版本id
    * versionDescription  版本描述
    * createdAt  创建时间
    * launchTemplateId  模板id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateData' => null,
        'versionNumber' => null,
        'versionId' => null,
        'versionDescription' => null,
        'createdAt' => null,
        'launchTemplateId' => null
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
    * templateData  templateData
    * versionNumber  版本号
    * versionId  版本id
    * versionDescription  版本描述
    * createdAt  创建时间
    * launchTemplateId  模板id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateData' => 'template_data',
            'versionNumber' => 'version_number',
            'versionId' => 'version_id',
            'versionDescription' => 'version_description',
            'createdAt' => 'created_at',
            'launchTemplateId' => 'launch_template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateData  templateData
    * versionNumber  版本号
    * versionId  版本id
    * versionDescription  版本描述
    * createdAt  创建时间
    * launchTemplateId  模板id
    *
    * @var string[]
    */
    protected static $setters = [
            'templateData' => 'setTemplateData',
            'versionNumber' => 'setVersionNumber',
            'versionId' => 'setVersionId',
            'versionDescription' => 'setVersionDescription',
            'createdAt' => 'setCreatedAt',
            'launchTemplateId' => 'setLaunchTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateData  templateData
    * versionNumber  版本号
    * versionId  版本id
    * versionDescription  版本描述
    * createdAt  创建时间
    * launchTemplateId  模板id
    *
    * @var string[]
    */
    protected static $getters = [
            'templateData' => 'getTemplateData',
            'versionNumber' => 'getVersionNumber',
            'versionId' => 'getVersionId',
            'versionDescription' => 'getVersionDescription',
            'createdAt' => 'getCreatedAt',
            'launchTemplateId' => 'getLaunchTemplateId'
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
        $this->container['templateData'] = isset($data['templateData']) ? $data['templateData'] : null;
        $this->container['versionNumber'] = isset($data['versionNumber']) ? $data['versionNumber'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['launchTemplateId'] = isset($data['launchTemplateId']) ? $data['launchTemplateId'] : null;
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
    * Gets templateData
    *  templateData
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateData|null
    */
    public function getTemplateData()
    {
        return $this->container['templateData'];
    }

    /**
    * Sets templateData
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateData|null $templateData templateData
    *
    * @return $this
    */
    public function setTemplateData($templateData)
    {
        $this->container['templateData'] = $templateData;
        return $this;
    }

    /**
    * Gets versionNumber
    *  版本号
    *
    * @return int|null
    */
    public function getVersionNumber()
    {
        return $this->container['versionNumber'];
    }

    /**
    * Sets versionNumber
    *
    * @param int|null $versionNumber 版本号
    *
    * @return $this
    */
    public function setVersionNumber($versionNumber)
    {
        $this->container['versionNumber'] = $versionNumber;
        return $this;
    }

    /**
    * Gets versionId
    *  版本id
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 版本id
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets versionDescription
    *  版本描述
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 版本描述
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets launchTemplateId
    *  模板id
    *
    * @return string|null
    */
    public function getLaunchTemplateId()
    {
        return $this->container['launchTemplateId'];
    }

    /**
    * Sets launchTemplateId
    *
    * @param string|null $launchTemplateId 模板id
    *
    * @return $this
    */
    public function setLaunchTemplateId($launchTemplateId)
    {
        $this->container['launchTemplateId'] = $launchTemplateId;
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

