<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryTemplateVO2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryTemplateVO2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateType  模板类型
    * codeTitle  代码模板名称
    * creatorName  创建者名称
    * codeDescription  代码模板描述
    * languages  模板语言
    * plateform  模板平台
    * entertype  模板类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateType' => 'string',
            'codeTitle' => 'string',
            'creatorName' => 'string',
            'codeDescription' => 'string',
            'languages' => 'string[]',
            'plateform' => 'string[]',
            'entertype' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateType  模板类型
    * codeTitle  代码模板名称
    * creatorName  创建者名称
    * codeDescription  代码模板描述
    * languages  模板语言
    * plateform  模板平台
    * entertype  模板类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateType' => null,
        'codeTitle' => null,
        'creatorName' => null,
        'codeDescription' => null,
        'languages' => null,
        'plateform' => null,
        'entertype' => null
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
    * templateType  模板类型
    * codeTitle  代码模板名称
    * creatorName  创建者名称
    * codeDescription  代码模板描述
    * languages  模板语言
    * plateform  模板平台
    * entertype  模板类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateType' => 'template_type',
            'codeTitle' => 'code_title',
            'creatorName' => 'creator_name',
            'codeDescription' => 'code_description',
            'languages' => 'languages',
            'plateform' => 'plateform',
            'entertype' => 'entertype'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateType  模板类型
    * codeTitle  代码模板名称
    * creatorName  创建者名称
    * codeDescription  代码模板描述
    * languages  模板语言
    * plateform  模板平台
    * entertype  模板类型
    *
    * @var string[]
    */
    protected static $setters = [
            'templateType' => 'setTemplateType',
            'codeTitle' => 'setCodeTitle',
            'creatorName' => 'setCreatorName',
            'codeDescription' => 'setCodeDescription',
            'languages' => 'setLanguages',
            'plateform' => 'setPlateform',
            'entertype' => 'setEntertype'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateType  模板类型
    * codeTitle  代码模板名称
    * creatorName  创建者名称
    * codeDescription  代码模板描述
    * languages  模板语言
    * plateform  模板平台
    * entertype  模板类型
    *
    * @var string[]
    */
    protected static $getters = [
            'templateType' => 'getTemplateType',
            'codeTitle' => 'getCodeTitle',
            'creatorName' => 'getCreatorName',
            'codeDescription' => 'getCodeDescription',
            'languages' => 'getLanguages',
            'plateform' => 'getPlateform',
            'entertype' => 'getEntertype'
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
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['codeTitle'] = isset($data['codeTitle']) ? $data['codeTitle'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['codeDescription'] = isset($data['codeDescription']) ? $data['codeDescription'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['plateform'] = isset($data['plateform']) ? $data['plateform'] : null;
        $this->container['entertype'] = isset($data['entertype']) ? $data['entertype'] : null;
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
    *  模板类型
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
    * @param string $templateType 模板类型
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets codeTitle
    *  代码模板名称
    *
    * @return string|null
    */
    public function getCodeTitle()
    {
        return $this->container['codeTitle'];
    }

    /**
    * Sets codeTitle
    *
    * @param string|null $codeTitle 代码模板名称
    *
    * @return $this
    */
    public function setCodeTitle($codeTitle)
    {
        $this->container['codeTitle'] = $codeTitle;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets codeDescription
    *  代码模板描述
    *
    * @return string|null
    */
    public function getCodeDescription()
    {
        return $this->container['codeDescription'];
    }

    /**
    * Sets codeDescription
    *
    * @param string|null $codeDescription 代码模板描述
    *
    * @return $this
    */
    public function setCodeDescription($codeDescription)
    {
        $this->container['codeDescription'] = $codeDescription;
        return $this;
    }

    /**
    * Gets languages
    *  模板语言
    *
    * @return string[]|null
    */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
    * Sets languages
    *
    * @param string[]|null $languages 模板语言
    *
    * @return $this
    */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;
        return $this;
    }

    /**
    * Gets plateform
    *  模板平台
    *
    * @return string[]|null
    */
    public function getPlateform()
    {
        return $this->container['plateform'];
    }

    /**
    * Sets plateform
    *
    * @param string[]|null $plateform 模板平台
    *
    * @return $this
    */
    public function setPlateform($plateform)
    {
        $this->container['plateform'] = $plateform;
        return $this;
    }

    /**
    * Gets entertype
    *  模板类型
    *
    * @return string[]|null
    */
    public function getEntertype()
    {
        return $this->container['entertype'];
    }

    /**
    * Sets entertype
    *
    * @param string[]|null $entertype 模板类型
    *
    * @return $this
    */
    public function setEntertype($entertype)
    {
        $this->container['entertype'] = $entertype;
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

