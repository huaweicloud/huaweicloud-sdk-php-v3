<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadChartResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadChartResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * translate  **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instruction  **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * iconUrl  **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * public  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartUrl  **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'values' => 'string',
            'translate' => 'string',
            'instruction' => 'string',
            'version' => 'string',
            'description' => 'string',
            'source' => 'string',
            'iconUrl' => 'string',
            'public' => 'bool',
            'chartUrl' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * translate  **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instruction  **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * iconUrl  **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * public  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartUrl  **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'values' => null,
        'translate' => null,
        'instruction' => null,
        'version' => null,
        'description' => null,
        'source' => null,
        'iconUrl' => null,
        'public' => null,
        'chartUrl' => null,
        'createAt' => null,
        'updateAt' => null
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
    * id  **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * translate  **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instruction  **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * iconUrl  **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * public  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartUrl  **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'values' => 'values',
            'translate' => 'translate',
            'instruction' => 'instruction',
            'version' => 'version',
            'description' => 'description',
            'source' => 'source',
            'iconUrl' => 'icon_url',
            'public' => 'public',
            'chartUrl' => 'chart_url',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * translate  **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instruction  **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * iconUrl  **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * public  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartUrl  **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'values' => 'setValues',
            'translate' => 'setTranslate',
            'instruction' => 'setInstruction',
            'version' => 'setVersion',
            'description' => 'setDescription',
            'source' => 'setSource',
            'iconUrl' => 'setIconUrl',
            'public' => 'setPublic',
            'chartUrl' => 'setChartUrl',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * translate  **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instruction  **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * iconUrl  **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * public  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartUrl  **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'values' => 'getValues',
            'translate' => 'getTranslate',
            'instruction' => 'getInstruction',
            'version' => 'getVersion',
            'description' => 'getDescription',
            'source' => 'getSource',
            'iconUrl' => 'getIconUrl',
            'public' => 'getPublic',
            'chartUrl' => 'getChartUrl',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['translate'] = isset($data['translate']) ? $data['translate'] : null;
        $this->container['instruction'] = isset($data['instruction']) ? $data['instruction'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['chartUrl'] = isset($data['chartUrl']) ? $data['chartUrl'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    * Gets id
    *  **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $name **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string|null $values **参数解释：** 模板值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets translate
    *  **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTranslate()
    {
        return $this->container['translate'];
    }

    /**
    * Sets translate
    *
    * @param string|null $translate **参数解释：** 模板翻译资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTranslate($translate)
    {
        $this->container['translate'] = $translate;
        return $this;
    }

    /**
    * Gets instruction
    *  **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
    * Sets instruction
    *
    * @param string|null $instruction **参数解释：** 模板介绍 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：** 模板版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释：** 模板的来源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets iconUrl
    *  **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getIconUrl()
    {
        return $this->container['iconUrl'];
    }

    /**
    * Sets iconUrl
    *
    * @param string|null $iconUrl **参数解释：** 模板的图标链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets public
    *  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    *
    * @return bool|null
    */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
    * Sets public
    *
    * @param bool|null $public **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    *
    * @return $this
    */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
        return $this;
    }

    /**
    * Gets chartUrl
    *  **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChartUrl()
    {
        return $this->container['chartUrl'];
    }

    /**
    * Sets chartUrl
    *
    * @param string|null $chartUrl **参数解释：** 模板的链接 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChartUrl($chartUrl)
    {
        $this->container['chartUrl'] = $chartUrl;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

