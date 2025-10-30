<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeContainerStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeContainerStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * containerId  **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * opr  **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'opr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * containerId  **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * opr  **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'containerId' => null,
        'containerName' => null,
        'opr' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * containerId  **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * opr  **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'opr' => 'opr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * containerId  **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * opr  **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'opr' => 'setOpr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * containerId  **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * opr  **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'opr' => 'getOpr'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['opr'] = isset($data['opr']) ? $data['opr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['containerId'] === null) {
            $invalidProperties[] = "'containerId' can't be null";
        }
            if ((mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['containerId'])) {
                $invalidProperties[] = "invalid value for 'containerId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['containerName'] === null) {
            $invalidProperties[] = "'containerName' can't be null";
        }
            if ((mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['opr'] === null) {
            $invalidProperties[] = "'opr' can't be null";
        }
            if ((mb_strlen($this->container['opr']) > 32)) {
                $invalidProperties[] = "invalid value for 'opr', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['opr']) < 1)) {
                $invalidProperties[] = "invalid value for 'opr', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^Recover|Pause|Kill|Isolate$\"/", $this->container['opr'])) {
                $invalidProperties[] = "invalid value for 'opr', must be conform to the pattern /^Recover|Pause|Kill|Isolate$\"/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string $containerId **参数解释**： 容器ID **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string $containerName **参数解释**： 容器名称 **约束限制**： 必填 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets opr
    *  **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getOpr()
    {
        return $this->container['opr'];
    }

    /**
    * Sets opr
    *
    * @param string $opr **参数解释**： 操作类型 **约束限制**: 必填 **取值范围**: - Recover：恢复。 - Pause：暂停。 - Kill：杀死。 - Isolate：隔离。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOpr($opr)
    {
        $this->container['opr'] = $opr;
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

