<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  自定义告警模板名称，如：alarmTemplate-Test01。
    * templateDescription  自定义告警模板描述。
    * namespace  自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    * dimensionName  自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * templateItems  自定义告警模板添加的一组或者多个告警策略。
    * templateId  自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'templateDescription' => 'string',
            'namespace' => 'string',
            'dimensionName' => 'string',
            'templateItems' => '\HuaweiCloud\SDK\Ces\V1\Model\TemplateItem[]',
            'templateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  自定义告警模板名称，如：alarmTemplate-Test01。
    * templateDescription  自定义告警模板描述。
    * namespace  自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    * dimensionName  自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * templateItems  自定义告警模板添加的一组或者多个告警策略。
    * templateId  自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'templateDescription' => null,
        'namespace' => null,
        'dimensionName' => null,
        'templateItems' => null,
        'templateId' => null
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
    * templateName  自定义告警模板名称，如：alarmTemplate-Test01。
    * templateDescription  自定义告警模板描述。
    * namespace  自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    * dimensionName  自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * templateItems  自定义告警模板添加的一组或者多个告警策略。
    * templateId  自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'templateDescription' => 'template_description',
            'namespace' => 'namespace',
            'dimensionName' => 'dimension_name',
            'templateItems' => 'template_items',
            'templateId' => 'template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  自定义告警模板名称，如：alarmTemplate-Test01。
    * templateDescription  自定义告警模板描述。
    * namespace  自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    * dimensionName  自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * templateItems  自定义告警模板添加的一组或者多个告警策略。
    * templateId  自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'templateDescription' => 'setTemplateDescription',
            'namespace' => 'setNamespace',
            'dimensionName' => 'setDimensionName',
            'templateItems' => 'setTemplateItems',
            'templateId' => 'setTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  自定义告警模板名称，如：alarmTemplate-Test01。
    * templateDescription  自定义告警模板描述。
    * namespace  自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    * dimensionName  自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * templateItems  自定义告警模板添加的一组或者多个告警策略。
    * templateId  自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'templateDescription' => 'getTemplateDescription',
            'namespace' => 'getNamespace',
            'dimensionName' => 'getDimensionName',
            'templateItems' => 'getTemplateItems',
            'templateId' => 'getTemplateId'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateDescription'] = isset($data['templateDescription']) ? $data['templateDescription'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensionName'] = isset($data['dimensionName']) ? $data['dimensionName'] : null;
        $this->container['templateItems'] = isset($data['templateItems']) ? $data['templateItems'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
            }
            if (!is_null($this->container['dimensionName']) && (mb_strlen($this->container['dimensionName']) > 131)) {
                $invalidProperties[] = "invalid value for 'dimensionName', the character length must be smaller than or equal to 131.";
            }
            if (!is_null($this->container['dimensionName']) && (mb_strlen($this->container['dimensionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimensionName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dimensionName']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/", $this->container['dimensionName'])) {
                $invalidProperties[] = "invalid value for 'dimensionName', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/.";
            }
            if (!is_null($this->container['templateId']) && !preg_match("/^at([0-9A-Za-z]){0,62}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^at([0-9A-Za-z]){0,62}$/.";
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
    * Gets templateName
    *  自定义告警模板名称，如：alarmTemplate-Test01。
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 自定义告警模板名称，如：alarmTemplate-Test01。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateDescription
    *  自定义告警模板描述。
    *
    * @return string|null
    */
    public function getTemplateDescription()
    {
        return $this->container['templateDescription'];
    }

    /**
    * Sets templateDescription
    *
    * @param string|null $templateDescription 自定义告警模板描述。
    *
    * @return $this
    */
    public function setTemplateDescription($templateDescription)
    {
        $this->container['templateDescription'] = $templateDescription;
        return $this;
    }

    /**
    * Gets namespace
    *  自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 自定义告警模板选择的资源类型，即服务命名空间，如：选择弹性云服务器，则命名空间为SYS.ECS，可查看各资源的“[服务命名空间](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensionName
    *  自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getDimensionName()
    {
        return $this->container['dimensionName'];
    }

    /**
    * Sets dimensionName
    *
    * @param string|null $dimensionName 自定义告警模板选择的资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setDimensionName($dimensionName)
    {
        $this->container['dimensionName'] = $dimensionName;
        return $this;
    }

    /**
    * Gets templateItems
    *  自定义告警模板添加的一组或者多个告警策略。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\TemplateItem[]|null
    */
    public function getTemplateItems()
    {
        return $this->container['templateItems'];
    }

    /**
    * Sets templateItems
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\TemplateItem[]|null $templateItems 自定义告警模板添加的一组或者多个告警策略。
    *
    * @return $this
    */
    public function setTemplateItems($templateItems)
    {
        $this->container['templateItems'] = $templateItems;
        return $this;
    }

    /**
    * Gets templateId
    *  自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 自定义告警模板的ID，如：at1603330892378wkDm77y6B。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
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

