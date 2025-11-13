<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapLTSConfigResponseInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapLTSConfigResponse_instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    * name  **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    * mode  **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    * engineName  **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    * engineVersion  **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    * status  **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    * enterpriseProjectId  **参数解释**： 企业project ID。  **取值范围**：  不涉及。
    * enterpriseProjectName  **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'mode' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'status' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    * name  **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    * mode  **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    * engineName  **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    * engineVersion  **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    * status  **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    * enterpriseProjectId  **参数解释**： 企业project ID。  **取值范围**：  不涉及。
    * enterpriseProjectName  **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mode' => null,
        'engineName' => null,
        'engineVersion' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null
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
    * id  **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    * name  **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    * mode  **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    * engineName  **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    * engineVersion  **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    * status  **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    * enterpriseProjectId  **参数解释**： 企业project ID。  **取值范围**：  不涉及。
    * enterpriseProjectName  **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'mode' => 'mode',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    * name  **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    * mode  **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    * engineName  **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    * engineVersion  **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    * status  **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    * enterpriseProjectId  **参数解释**： 企业project ID。  **取值范围**：  不涉及。
    * enterpriseProjectName  **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'mode' => 'setMode',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    * name  **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    * mode  **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    * engineName  **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    * engineVersion  **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    * status  **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    * enterpriseProjectId  **参数解释**： 企业project ID。  **取值范围**：  不涉及。
    * enterpriseProjectName  **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'mode' => 'getMode',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 16)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
        }
            if ((mb_strlen($this->container['engineName']) > 16)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['engineName']) < 2)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
            if ((mb_strlen($this->container['engineVersion']) > 16)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['engineVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['status']) < 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 2)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 16)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 2)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 2.";
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
    * Gets id
    *  **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： HTAP标准版实例ID，此参数是实例的唯一标识。  **取值范围**：  只能由英文字母、数字组成，后缀为in17，长度为36个字符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： HTAP标准版实例名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode **参数解释**：  HTAP标准版实例模式。  **取值范围**：  - Cluster：集群模式。 - Single：单机模式。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets engineName
    *  **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName **参数解释**： 引擎类型。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion **参数解释**： 引擎版本。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**： HTAP标准版实例状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业project ID。  **取值范围**：  不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业project ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName **参数解释**： 企业project名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
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

