<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataclassTypeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataclassTypeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subCategory  子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * subCategoryCode  子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * category  类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * categoryCode  类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * name  自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
    * businessCode  自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    * dataclassBusinessCode  数据类业务编码，创建自定义类型必填。（其余类型不填）
    * description  类型描述
    * level  类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    * enabled  类型启用禁用状态，启用：true，禁用：false
    * sla  响应时长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subCategory' => 'string',
            'subCategoryCode' => 'string',
            'category' => 'string',
            'categoryCode' => 'string',
            'name' => 'string',
            'businessCode' => 'string',
            'dataclassBusinessCode' => 'string',
            'description' => 'string',
            'level' => 'int',
            'enabled' => 'bool',
            'sla' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subCategory  子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * subCategoryCode  子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * category  类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * categoryCode  类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * name  自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
    * businessCode  自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    * dataclassBusinessCode  数据类业务编码，创建自定义类型必填。（其余类型不填）
    * description  类型描述
    * level  类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    * enabled  类型启用禁用状态，启用：true，禁用：false
    * sla  响应时长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subCategory' => null,
        'subCategoryCode' => null,
        'category' => null,
        'categoryCode' => null,
        'name' => null,
        'businessCode' => null,
        'dataclassBusinessCode' => null,
        'description' => null,
        'level' => 'int32',
        'enabled' => null,
        'sla' => 'int64'
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
    * subCategory  子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * subCategoryCode  子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * category  类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * categoryCode  类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * name  自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
    * businessCode  自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    * dataclassBusinessCode  数据类业务编码，创建自定义类型必填。（其余类型不填）
    * description  类型描述
    * level  类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    * enabled  类型启用禁用状态，启用：true，禁用：false
    * sla  响应时长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subCategory' => 'sub_category',
            'subCategoryCode' => 'sub_category_code',
            'category' => 'category',
            'categoryCode' => 'category_code',
            'name' => 'name',
            'businessCode' => 'business_code',
            'dataclassBusinessCode' => 'dataclass_business_code',
            'description' => 'description',
            'level' => 'level',
            'enabled' => 'enabled',
            'sla' => 'sla'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subCategory  子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * subCategoryCode  子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * category  类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * categoryCode  类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * name  自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
    * businessCode  自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    * dataclassBusinessCode  数据类业务编码，创建自定义类型必填。（其余类型不填）
    * description  类型描述
    * level  类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    * enabled  类型启用禁用状态，启用：true，禁用：false
    * sla  响应时长
    *
    * @var string[]
    */
    protected static $setters = [
            'subCategory' => 'setSubCategory',
            'subCategoryCode' => 'setSubCategoryCode',
            'category' => 'setCategory',
            'categoryCode' => 'setCategoryCode',
            'name' => 'setName',
            'businessCode' => 'setBusinessCode',
            'dataclassBusinessCode' => 'setDataclassBusinessCode',
            'description' => 'setDescription',
            'level' => 'setLevel',
            'enabled' => 'setEnabled',
            'sla' => 'setSla'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subCategory  子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * subCategoryCode  子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    * category  类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * categoryCode  类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    * name  自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
    * businessCode  自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    * dataclassBusinessCode  数据类业务编码，创建自定义类型必填。（其余类型不填）
    * description  类型描述
    * level  类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    * enabled  类型启用禁用状态，启用：true，禁用：false
    * sla  响应时长
    *
    * @var string[]
    */
    protected static $getters = [
            'subCategory' => 'getSubCategory',
            'subCategoryCode' => 'getSubCategoryCode',
            'category' => 'getCategory',
            'categoryCode' => 'getCategoryCode',
            'name' => 'getName',
            'businessCode' => 'getBusinessCode',
            'dataclassBusinessCode' => 'getDataclassBusinessCode',
            'description' => 'getDescription',
            'level' => 'getLevel',
            'enabled' => 'getEnabled',
            'sla' => 'getSla'
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
    const LEVEL_1 = 1;
    const LEVEL_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_1,
            self::LEVEL_2,
        ];
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
        $this->container['subCategory'] = isset($data['subCategory']) ? $data['subCategory'] : null;
        $this->container['subCategoryCode'] = isset($data['subCategoryCode']) ? $data['subCategoryCode'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['businessCode'] = isset($data['businessCode']) ? $data['businessCode'] : null;
        $this->container['dataclassBusinessCode'] = isset($data['dataclassBusinessCode']) ? $data['dataclassBusinessCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['sla'] = isset($data['sla']) ? $data['sla'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subCategory']) && (mb_strlen($this->container['subCategory']) > 64)) {
                $invalidProperties[] = "invalid value for 'subCategory', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subCategory']) && (mb_strlen($this->container['subCategory']) < 2)) {
                $invalidProperties[] = "invalid value for 'subCategory', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['subCategoryCode']) && (mb_strlen($this->container['subCategoryCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'subCategoryCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subCategoryCode']) && (mb_strlen($this->container['subCategoryCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'subCategoryCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['categoryCode']) && (mb_strlen($this->container['categoryCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'categoryCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['categoryCode']) && (mb_strlen($this->container['categoryCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'categoryCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['businessCode']) && (mb_strlen($this->container['businessCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessCode']) && (mb_strlen($this->container['businessCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'businessCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['dataclassBusinessCode']) && (mb_strlen($this->container['dataclassBusinessCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassBusinessCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassBusinessCode']) && (mb_strlen($this->container['dataclassBusinessCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'dataclassBusinessCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['level']) && ($this->container['level'] > 2)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 1)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 1.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['sla'] === null) {
            $invalidProperties[] = "'sla' can't be null";
        }
            if (($this->container['sla'] > 15634800000)) {
                $invalidProperties[] = "invalid value for 'sla', must be smaller than or equal to 15634800000.";
            }
            if (($this->container['sla'] < 0)) {
                $invalidProperties[] = "invalid value for 'sla', must be bigger than or equal to 0.";
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
    * Gets subCategory
    *  子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    *
    * @return string|null
    */
    public function getSubCategory()
    {
        return $this->container['subCategory'];
    }

    /**
    * Sets subCategory
    *
    * @param string|null $subCategory 子类型名称，告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    *
    * @return $this
    */
    public function setSubCategory($subCategory)
    {
        $this->container['subCategory'] = $subCategory;
        return $this;
    }

    /**
    * Gets subCategoryCode
    *  子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    *
    * @return string|null
    */
    public function getSubCategoryCode()
    {
        return $this->container['subCategoryCode'];
    }

    /**
    * Sets subCategoryCode
    *
    * @param string|null $subCategoryCode 子类型标识。告警类型、事件类型必填；威胁情报、漏洞类型、自定义类型不填
    *
    * @return $this
    */
    public function setSubCategoryCode($subCategoryCode)
    {
        $this->container['subCategoryCode'] = $subCategoryCode;
        return $this;
    }

    /**
    * Gets category
    *  类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
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
    * @param string|null $category 类型名称，告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets categoryCode
    *  类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    *
    * @return string|null
    */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
    * Sets categoryCode
    *
    * @param string|null $categoryCode 类型标识。告警类型、事件类型、威胁情报、漏洞类型必填；自定义类型不填
    *
    * @return $this
    */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;
        return $this;
    }

    /**
    * Gets name
    *  自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
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
    * @param string|null $name 自定义类型名称。创建类型时，代表类型名称，创建子类型时，代表子类型名称。（自定义类型必填，其余类型不填）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets businessCode
    *  自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    *
    * @return string|null
    */
    public function getBusinessCode()
    {
        return $this->container['businessCode'];
    }

    /**
    * Sets businessCode
    *
    * @param string|null $businessCode 自定义类型标识。创建类型时代表类型标识；创建子类型时代表子类型标识。（自定义类型必填，其余类型不填）
    *
    * @return $this
    */
    public function setBusinessCode($businessCode)
    {
        $this->container['businessCode'] = $businessCode;
        return $this;
    }

    /**
    * Gets dataclassBusinessCode
    *  数据类业务编码，创建自定义类型必填。（其余类型不填）
    *
    * @return string|null
    */
    public function getDataclassBusinessCode()
    {
        return $this->container['dataclassBusinessCode'];
    }

    /**
    * Sets dataclassBusinessCode
    *
    * @param string|null $dataclassBusinessCode 数据类业务编码，创建自定义类型必填。（其余类型不填）
    *
    * @return $this
    */
    public function setDataclassBusinessCode($dataclassBusinessCode)
    {
        $this->container['dataclassBusinessCode'] = $dataclassBusinessCode;
        return $this;
    }

    /**
    * Gets description
    *  类型描述
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
    * @param string|null $description 类型描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets level
    *  类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 类型层级，创建自定义类型必填，枚举值：1-类型，2-子类型。（其余类型不填）
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets enabled
    *  类型启用禁用状态，启用：true，禁用：false
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 类型启用禁用状态，启用：true，禁用：false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets sla
    *  响应时长
    *
    * @return int
    */
    public function getSla()
    {
        return $this->container['sla'];
    }

    /**
    * Sets sla
    *
    * @param int $sla 响应时长
    *
    * @return $this
    */
    public function setSla($sla)
    {
        $this->container['sla'] = $sla;
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

