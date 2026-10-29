<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskRulesetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskRulesetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
    * language  **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * type  **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
    * status  **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'language' => 'string',
            'templateName' => 'string',
            'type' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
    * language  **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * type  **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
    * status  **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'language' => null,
        'templateName' => null,
        'type' => null,
        'status' => null
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
    * templateId  **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
    * language  **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * type  **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
    * status  **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'language' => 'language',
            'templateName' => 'template_name',
            'type' => 'type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
    * language  **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * type  **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
    * status  **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'language' => 'setLanguage',
            'templateName' => 'setTemplateName',
            'type' => 'setType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
    * language  **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * templateName  **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    * type  **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
    * status  **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'language' => 'getLanguage',
            'templateName' => 'getTemplateName',
            'type' => 'getType',
            'status' => 'getStatus'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets templateId
    *  **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
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
    * @param string|null $templateId **参数解释：** 规则集ID。 **取值范围:** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释：** 规则集语言。 **取值范围:** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets templateName
    *  **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
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
    * @param string|null $templateName **参数解释：** 规则集名称。 **取值范围:** 任意中英文，数字，点，连字符-及下划线_。长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
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
    * @param string|null $type **参数解释：** 规则集选取状态。 **取值范围:** - selected：已选。 - optional：可选，指未开启的语言在当前项目下的默认规则集。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 规则集属性。 **取值范围:** - 0：用户自定义规则集。 - 1：系统规则集。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

