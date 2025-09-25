<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlTypeInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlTypeInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
    * prefixes  **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    * isPreset  **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'prefixes' => 'string[]',
            'isPreset' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
    * prefixes  **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    * isPreset  **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'prefixes' => null,
        'isPreset' => null
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
    * category  **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
    * prefixes  **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    * isPreset  **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'prefixes' => 'prefixes',
            'isPreset' => 'is_preset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
    * prefixes  **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    * isPreset  **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'prefixes' => 'setPrefixes',
            'isPreset' => 'setIsPreset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
    * prefixes  **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    * isPreset  **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'prefixes' => 'getPrefixes',
            'isPreset' => 'getIsPreset'
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
    const CATEGORY_ALL = 'all';
    const CATEGORY_DDL = 'ddl';
    const CATEGORY_DML = 'dml';
    const CATEGORY_DCL = 'dcl';
    const CATEGORY_TCL = 'tcl';
    const CATEGORY_DQL = 'dql';
    const CATEGORY_CUSTOM = 'custom';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_ALL,
            self::CATEGORY_DDL,
            self::CATEGORY_DML,
            self::CATEGORY_DCL,
            self::CATEGORY_TCL,
            self::CATEGORY_DQL,
            self::CATEGORY_CUSTOM,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['prefixes'] = isset($data['prefixes']) ? $data['prefixes'] : null;
        $this->container['isPreset'] = isset($data['isPreset']) ? $data['isPreset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
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
    * @param string|null $category **参数解释**: SQL类型的归类名称。 - 对常用SQL类型，简单归类为6个类别，每个类别对应一组固定的采集SQL语句类型列表，采用前缀进行匹配。 - 对于其他场景，可以使用自定义类别，允许按需自定义采集SQL的语句前缀。  **取值范围**: - all：不区分SQL类型，全部采集。 - ddl：只采集DDL语句类型。 - dml：只采集DML语句类型。 - dcl：只采集DCL语句类型。 - tcl：只采集TCL语句类型。 - dql：只采集DQL语句类型。 - custom：采集自定义语句类型。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets prefixes
    *  **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    *
    * @return string[]|null
    */
    public function getPrefixes()
    {
        return $this->container['prefixes'];
    }

    /**
    * Sets prefixes
    *
    * @param string[]|null $prefixes **参数解释**: 对应SQL类别中，采集的SQL语句类型列表，采用前缀方式进行匹配。 对应不同的SQL类别，取值有所不同，对应关系如下： - all：不区分SQL类型，全部采集。对应取值为： [\".*\"]。 - ddl：只采集DDL语句类别，对于取值为： [\"create\", \"alter\", \"drop\", \"truncate\", \"reindex\", \"vacuum\", \"analyze\", \"declare\", \"move\", \"close\"]。 - dml：只采集DML语句类型，对于取值为： [\"insert\", \"update\", \"delete\", \"merge\", \"show\", \"explain\", \"prepare\", \"lock\", \"copy\", \"execute\", \"deallocate\"]。 - dcl：只采集DCL语句类型，对于取值为： [\"grant\", \"revoke\", \"reassign\", \"set\"]。 - tcl：只采集TCL语句类型，对于取值为： [\"begin\", \"commit\", \"rollback\", \"start\", \"savepoint\", \"checkpoint\", \"release savepoint\"]。 - dql：只采集DQL语句类型，对于取值为： [\"select\"]。 - custom：采集自定义语句类型。对应取值为： 开启全量SQL时，用户填写的自定义SQL语句类型列表。  **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPrefixes($prefixes)
    {
        $this->container['prefixes'] = $prefixes;
        return $this;
    }

    /**
    * Gets isPreset
    *  **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @return bool|null
    */
    public function getIsPreset()
    {
        return $this->container['isPreset'];
    }

    /**
    * Sets isPreset
    *
    * @param bool|null $isPreset **参数解释**: 对应SQL类别是否为预置类别。 **取值范围**: - true：对应category取值all、ddl 、dml 、dcl 、tcl 、dql 。 - false：对应category取值custom。
    *
    * @return $this
    */
    public function setIsPreset($isPreset)
    {
        $this->container['isPreset'] = $isPreset;
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

