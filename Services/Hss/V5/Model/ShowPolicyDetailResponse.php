<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPolicyDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPolicyDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    * content  **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    * description  **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
    * enabled  **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    * name  **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    * supportOs  **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * policyId  **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    * featureName  **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'content' => 'string',
            'description' => 'string',
            'enabled' => 'bool',
            'name' => 'string',
            'supportOs' => 'string',
            'policyId' => 'string',
            'featureName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    * content  **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    * description  **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
    * enabled  **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    * name  **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    * supportOs  **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * policyId  **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    * featureName  **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'content' => null,
        'description' => null,
        'enabled' => null,
        'name' => null,
        'supportOs' => null,
        'policyId' => null,
        'featureName' => null
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
    * category  **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    * content  **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    * description  **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
    * enabled  **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    * name  **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    * supportOs  **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * policyId  **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    * featureName  **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'content' => 'content',
            'description' => 'description',
            'enabled' => 'enabled',
            'name' => 'name',
            'supportOs' => 'support_os',
            'policyId' => 'policy_id',
            'featureName' => 'feature_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    * content  **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    * description  **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
    * enabled  **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    * name  **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    * supportOs  **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * policyId  **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    * featureName  **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'content' => 'setContent',
            'description' => 'setDescription',
            'enabled' => 'setEnabled',
            'name' => 'setName',
            'supportOs' => 'setSupportOs',
            'policyId' => 'setPolicyId',
            'featureName' => 'setFeatureName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    * content  **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    * description  **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
    * enabled  **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    * name  **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    * supportOs  **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * policyId  **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    * featureName  **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'content' => 'getContent',
            'description' => 'getDescription',
            'enabled' => 'getEnabled',
            'name' => 'getName',
            'supportOs' => 'getSupportOs',
            'policyId' => 'getPolicyId',
            'featureName' => 'getFeatureName'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['supportOs'] = isset($data['supportOs']) ? $data['supportOs'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['featureName'] = isset($data['featureName']) ? $data['featureName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 128)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) > 64)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['supportOs']) && (mb_strlen($this->container['supportOs']) < 1)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['featureName']) && (mb_strlen($this->container['featureName']) > 128)) {
                $invalidProperties[] = "invalid value for 'featureName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['featureName']) && (mb_strlen($this->container['featureName']) < 1)) {
                $invalidProperties[] = "invalid value for 'featureName', the character length must be bigger than or equal to 1.";
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
    * Gets category
    *  **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 功能类别 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释**： 策略内容 **取值范围**： 字符长度0-4096位
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
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
    * @param string|null $description **参数解释**： 策略描述 **取值范围**： 字符长度0-1024位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**： 策略是否开启 **取值范围**： - true：开启 - false：关闭
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 策略名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets supportOs
    *  **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    *
    * @return string|null
    */
    public function getSupportOs()
    {
        return $this->container['supportOs'];
    }

    /**
    * Sets supportOs
    *
    * @param string|null $supportOs **参数解释**： 策略支持的主机种类 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    *
    * @return $this
    */
    public function setSupportOs($supportOs)
    {
        $this->container['supportOs'] = $supportOs;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释**： 策略Id **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets featureName
    *  **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getFeatureName()
    {
        return $this->container['featureName'];
    }

    /**
    * Sets featureName
    *
    * @param string|null $featureName **参数解释**： 特性名 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setFeatureName($featureName)
    {
        $this->container['featureName'] = $featureName;
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

