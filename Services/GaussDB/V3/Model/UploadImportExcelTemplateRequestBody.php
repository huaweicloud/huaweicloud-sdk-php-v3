<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadImportExcelTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadImportExcelTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateType  **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    * file  **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    * isInstanceLevel  **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    * selectedDbs  **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isSupportRegexp  **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateType' => 'string',
            'file' => '\SplFileObject',
            'isInstanceLevel' => 'string',
            'selectedDbs' => 'string',
            'isSupportRegexp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateType  **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    * file  **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    * isInstanceLevel  **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    * selectedDbs  **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isSupportRegexp  **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateType' => null,
        'file' => 'binary',
        'isInstanceLevel' => null,
        'selectedDbs' => null,
        'isSupportRegexp' => null
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
    * templateType  **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    * file  **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    * isInstanceLevel  **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    * selectedDbs  **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isSupportRegexp  **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateType' => 'template_type',
            'file' => 'file',
            'isInstanceLevel' => 'is_instance_level',
            'selectedDbs' => 'selected_dbs',
            'isSupportRegexp' => 'is_support_regexp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateType  **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    * file  **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    * isInstanceLevel  **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    * selectedDbs  **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isSupportRegexp  **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateType' => 'setTemplateType',
            'file' => 'setFile',
            'isInstanceLevel' => 'setIsInstanceLevel',
            'selectedDbs' => 'setSelectedDbs',
            'isSupportRegexp' => 'setIsSupportRegexp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateType  **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    * file  **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    * isInstanceLevel  **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    * selectedDbs  **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isSupportRegexp  **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateType' => 'getTemplateType',
            'file' => 'getFile',
            'isInstanceLevel' => 'getIsInstanceLevel',
            'selectedDbs' => 'getSelectedDbs',
            'isSupportRegexp' => 'getIsSupportRegexp'
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
    const IS_INSTANCE_LEVEL_TRUE = 'true';
    const IS_INSTANCE_LEVEL_FALSE = 'false';
    const IS_SUPPORT_REGEXP_TRUE = 'true';
    const IS_SUPPORT_REGEXP_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsInstanceLevelAllowableValues()
    {
        return [
            self::IS_INSTANCE_LEVEL_TRUE,
            self::IS_INSTANCE_LEVEL_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsSupportRegexpAllowableValues()
    {
        return [
            self::IS_SUPPORT_REGEXP_TRUE,
            self::IS_SUPPORT_REGEXP_FALSE,
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
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['isInstanceLevel'] = isset($data['isInstanceLevel']) ? $data['isInstanceLevel'] : null;
        $this->container['selectedDbs'] = isset($data['selectedDbs']) ? $data['selectedDbs'] : null;
        $this->container['isSupportRegexp'] = isset($data['isSupportRegexp']) ? $data['isSupportRegexp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
            if ((mb_strlen($this->container['templateType']) > 255)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['templateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
            $allowedValues = $this->getIsInstanceLevelAllowableValues();
                if (!is_null($this->container['isInstanceLevel']) && !in_array($this->container['isInstanceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isInstanceLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['isInstanceLevel']) && (mb_strlen($this->container['isInstanceLevel']) > 255)) {
                $invalidProperties[] = "invalid value for 'isInstanceLevel', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['isInstanceLevel']) && (mb_strlen($this->container['isInstanceLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'isInstanceLevel', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['selectedDbs'] === null) {
            $invalidProperties[] = "'selectedDbs' can't be null";
        }
            if ((mb_strlen($this->container['selectedDbs']) > 255)) {
                $invalidProperties[] = "invalid value for 'selectedDbs', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['selectedDbs']) < 1)) {
                $invalidProperties[] = "invalid value for 'selectedDbs', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getIsSupportRegexpAllowableValues();
                if (!is_null($this->container['isSupportRegexp']) && !in_array($this->container['isSupportRegexp'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isSupportRegexp', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['isSupportRegexp']) && (mb_strlen($this->container['isSupportRegexp']) > 10)) {
                $invalidProperties[] = "invalid value for 'isSupportRegexp', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['isSupportRegexp']) && (mb_strlen($this->container['isSupportRegexp']) < 1)) {
                $invalidProperties[] = "invalid value for 'isSupportRegexp', the character length must be bigger than or equal to 1.";
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
    * Gets templateType
    *  **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string $templateType **参数解释**：  具体选择哪一种模板进行下载。  **约束限制**：  不涉及。  **取值范围**：  import_async: Excel导入文件类型。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets file
    *  **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    *
    * @return \SplFileObject
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \SplFileObject $file **参数解释**：  Excel文件上传。  **约束限制**：  Excel文件。  **取值范围**：  .xlsx文件。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets isInstanceLevel
    *  **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    *
    * @return string|null
    */
    public function getIsInstanceLevel()
    {
        return $this->container['isInstanceLevel'];
    }

    /**
    * Sets isInstanceLevel
    *
    * @param string|null $isInstanceLevel **参数解释**：  判断是否是实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：实例级同步。 - false: 非实例级同步。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setIsInstanceLevel($isInstanceLevel)
    {
        $this->container['isInstanceLevel'] = $isInstanceLevel;
        return $this;
    }

    /**
    * Gets selectedDbs
    *  **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getSelectedDbs()
    {
        return $this->container['selectedDbs'];
    }

    /**
    * Sets selectedDbs
    *
    * @param string $selectedDbs **参数解释**：  用户选中的数据库名，用英文\",\"隔开。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSelectedDbs($selectedDbs)
    {
        $this->container['selectedDbs'] = $selectedDbs;
        return $this;
    }

    /**
    * Gets isSupportRegexp
    *  **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getIsSupportRegexp()
    {
        return $this->container['isSupportRegexp'];
    }

    /**
    * Sets isSupportRegexp
    *
    * @param string|null $isSupportRegexp **参数解释**：  是否支持标配符。  **约束限制**：  不涉及。  **取值范围**：  - true: 支持标配符。 - false: 不支持标配符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setIsSupportRegexp($isSupportRegexp)
    {
        $this->container['isSupportRegexp'] = $isSupportRegexp;
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

