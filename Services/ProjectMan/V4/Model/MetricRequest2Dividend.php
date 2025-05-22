<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricRequest2Dividend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricRequest2_dividend';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customField16  自定义字段
    * customField17  自定义字段
    * customField18  自定义字段
    * customField19  自定义字段
    * customField20  自定义字段
    * customField21  自定义字段
    * customField22  自定义字段
    * customField23  自定义字段
    * customField24  自定义字段
    * customField25  自定义字段
    * customField26  自定义字段
    * customField27  自定义字段
    * customField28  自定义字段
    * customField29  自定义字段
    * customField30  自定义字段
    * customField31  自定义字段
    * customField32  自定义字段
    * customField33  自定义字段
    * customField34  自定义字段
    * customField35  自定义字段
    * customField36  自定义字段
    * customField37  自定义字段
    * customField38  自定义字段
    * customField39  自定义字段
    * customField40  自定义字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customField16' => 'string',
            'customField17' => 'string',
            'customField18' => 'string',
            'customField19' => 'string',
            'customField20' => 'string',
            'customField21' => 'string',
            'customField22' => 'string',
            'customField23' => 'string',
            'customField24' => 'string',
            'customField25' => 'string',
            'customField26' => 'string',
            'customField27' => 'string',
            'customField28' => 'string',
            'customField29' => 'string',
            'customField30' => 'string',
            'customField31' => 'string',
            'customField32' => 'string',
            'customField33' => 'string',
            'customField34' => 'string',
            'customField35' => 'string',
            'customField36' => 'string',
            'customField37' => 'string',
            'customField38' => 'string',
            'customField39' => 'string',
            'customField40' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customField16  自定义字段
    * customField17  自定义字段
    * customField18  自定义字段
    * customField19  自定义字段
    * customField20  自定义字段
    * customField21  自定义字段
    * customField22  自定义字段
    * customField23  自定义字段
    * customField24  自定义字段
    * customField25  自定义字段
    * customField26  自定义字段
    * customField27  自定义字段
    * customField28  自定义字段
    * customField29  自定义字段
    * customField30  自定义字段
    * customField31  自定义字段
    * customField32  自定义字段
    * customField33  自定义字段
    * customField34  自定义字段
    * customField35  自定义字段
    * customField36  自定义字段
    * customField37  自定义字段
    * customField38  自定义字段
    * customField39  自定义字段
    * customField40  自定义字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customField16' => null,
        'customField17' => null,
        'customField18' => null,
        'customField19' => null,
        'customField20' => null,
        'customField21' => null,
        'customField22' => null,
        'customField23' => null,
        'customField24' => null,
        'customField25' => null,
        'customField26' => null,
        'customField27' => null,
        'customField28' => null,
        'customField29' => null,
        'customField30' => null,
        'customField31' => null,
        'customField32' => null,
        'customField33' => null,
        'customField34' => null,
        'customField35' => null,
        'customField36' => null,
        'customField37' => null,
        'customField38' => null,
        'customField39' => null,
        'customField40' => null
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
    * customField16  自定义字段
    * customField17  自定义字段
    * customField18  自定义字段
    * customField19  自定义字段
    * customField20  自定义字段
    * customField21  自定义字段
    * customField22  自定义字段
    * customField23  自定义字段
    * customField24  自定义字段
    * customField25  自定义字段
    * customField26  自定义字段
    * customField27  自定义字段
    * customField28  自定义字段
    * customField29  自定义字段
    * customField30  自定义字段
    * customField31  自定义字段
    * customField32  自定义字段
    * customField33  自定义字段
    * customField34  自定义字段
    * customField35  自定义字段
    * customField36  自定义字段
    * customField37  自定义字段
    * customField38  自定义字段
    * customField39  自定义字段
    * customField40  自定义字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customField16' => 'custom_field16',
            'customField17' => 'custom_field17',
            'customField18' => 'custom_field18',
            'customField19' => 'custom_field19',
            'customField20' => 'custom_field20',
            'customField21' => 'custom_field21',
            'customField22' => 'custom_field22',
            'customField23' => 'custom_field23',
            'customField24' => 'custom_field24',
            'customField25' => 'custom_field25',
            'customField26' => 'custom_field26',
            'customField27' => 'custom_field27',
            'customField28' => 'custom_field28',
            'customField29' => 'custom_field29',
            'customField30' => 'custom_field30',
            'customField31' => 'custom_field31',
            'customField32' => 'custom_field32',
            'customField33' => 'custom_field33',
            'customField34' => 'custom_field34',
            'customField35' => 'custom_field35',
            'customField36' => 'custom_field36',
            'customField37' => 'custom_field37',
            'customField38' => 'custom_field38',
            'customField39' => 'custom_field39',
            'customField40' => 'custom_field40'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customField16  自定义字段
    * customField17  自定义字段
    * customField18  自定义字段
    * customField19  自定义字段
    * customField20  自定义字段
    * customField21  自定义字段
    * customField22  自定义字段
    * customField23  自定义字段
    * customField24  自定义字段
    * customField25  自定义字段
    * customField26  自定义字段
    * customField27  自定义字段
    * customField28  自定义字段
    * customField29  自定义字段
    * customField30  自定义字段
    * customField31  自定义字段
    * customField32  自定义字段
    * customField33  自定义字段
    * customField34  自定义字段
    * customField35  自定义字段
    * customField36  自定义字段
    * customField37  自定义字段
    * customField38  自定义字段
    * customField39  自定义字段
    * customField40  自定义字段
    *
    * @var string[]
    */
    protected static $setters = [
            'customField16' => 'setCustomField16',
            'customField17' => 'setCustomField17',
            'customField18' => 'setCustomField18',
            'customField19' => 'setCustomField19',
            'customField20' => 'setCustomField20',
            'customField21' => 'setCustomField21',
            'customField22' => 'setCustomField22',
            'customField23' => 'setCustomField23',
            'customField24' => 'setCustomField24',
            'customField25' => 'setCustomField25',
            'customField26' => 'setCustomField26',
            'customField27' => 'setCustomField27',
            'customField28' => 'setCustomField28',
            'customField29' => 'setCustomField29',
            'customField30' => 'setCustomField30',
            'customField31' => 'setCustomField31',
            'customField32' => 'setCustomField32',
            'customField33' => 'setCustomField33',
            'customField34' => 'setCustomField34',
            'customField35' => 'setCustomField35',
            'customField36' => 'setCustomField36',
            'customField37' => 'setCustomField37',
            'customField38' => 'setCustomField38',
            'customField39' => 'setCustomField39',
            'customField40' => 'setCustomField40'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customField16  自定义字段
    * customField17  自定义字段
    * customField18  自定义字段
    * customField19  自定义字段
    * customField20  自定义字段
    * customField21  自定义字段
    * customField22  自定义字段
    * customField23  自定义字段
    * customField24  自定义字段
    * customField25  自定义字段
    * customField26  自定义字段
    * customField27  自定义字段
    * customField28  自定义字段
    * customField29  自定义字段
    * customField30  自定义字段
    * customField31  自定义字段
    * customField32  自定义字段
    * customField33  自定义字段
    * customField34  自定义字段
    * customField35  自定义字段
    * customField36  自定义字段
    * customField37  自定义字段
    * customField38  自定义字段
    * customField39  自定义字段
    * customField40  自定义字段
    *
    * @var string[]
    */
    protected static $getters = [
            'customField16' => 'getCustomField16',
            'customField17' => 'getCustomField17',
            'customField18' => 'getCustomField18',
            'customField19' => 'getCustomField19',
            'customField20' => 'getCustomField20',
            'customField21' => 'getCustomField21',
            'customField22' => 'getCustomField22',
            'customField23' => 'getCustomField23',
            'customField24' => 'getCustomField24',
            'customField25' => 'getCustomField25',
            'customField26' => 'getCustomField26',
            'customField27' => 'getCustomField27',
            'customField28' => 'getCustomField28',
            'customField29' => 'getCustomField29',
            'customField30' => 'getCustomField30',
            'customField31' => 'getCustomField31',
            'customField32' => 'getCustomField32',
            'customField33' => 'getCustomField33',
            'customField34' => 'getCustomField34',
            'customField35' => 'getCustomField35',
            'customField36' => 'getCustomField36',
            'customField37' => 'getCustomField37',
            'customField38' => 'getCustomField38',
            'customField39' => 'getCustomField39',
            'customField40' => 'getCustomField40'
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
        $this->container['customField16'] = isset($data['customField16']) ? $data['customField16'] : null;
        $this->container['customField17'] = isset($data['customField17']) ? $data['customField17'] : null;
        $this->container['customField18'] = isset($data['customField18']) ? $data['customField18'] : null;
        $this->container['customField19'] = isset($data['customField19']) ? $data['customField19'] : null;
        $this->container['customField20'] = isset($data['customField20']) ? $data['customField20'] : null;
        $this->container['customField21'] = isset($data['customField21']) ? $data['customField21'] : null;
        $this->container['customField22'] = isset($data['customField22']) ? $data['customField22'] : null;
        $this->container['customField23'] = isset($data['customField23']) ? $data['customField23'] : null;
        $this->container['customField24'] = isset($data['customField24']) ? $data['customField24'] : null;
        $this->container['customField25'] = isset($data['customField25']) ? $data['customField25'] : null;
        $this->container['customField26'] = isset($data['customField26']) ? $data['customField26'] : null;
        $this->container['customField27'] = isset($data['customField27']) ? $data['customField27'] : null;
        $this->container['customField28'] = isset($data['customField28']) ? $data['customField28'] : null;
        $this->container['customField29'] = isset($data['customField29']) ? $data['customField29'] : null;
        $this->container['customField30'] = isset($data['customField30']) ? $data['customField30'] : null;
        $this->container['customField31'] = isset($data['customField31']) ? $data['customField31'] : null;
        $this->container['customField32'] = isset($data['customField32']) ? $data['customField32'] : null;
        $this->container['customField33'] = isset($data['customField33']) ? $data['customField33'] : null;
        $this->container['customField34'] = isset($data['customField34']) ? $data['customField34'] : null;
        $this->container['customField35'] = isset($data['customField35']) ? $data['customField35'] : null;
        $this->container['customField36'] = isset($data['customField36']) ? $data['customField36'] : null;
        $this->container['customField37'] = isset($data['customField37']) ? $data['customField37'] : null;
        $this->container['customField38'] = isset($data['customField38']) ? $data['customField38'] : null;
        $this->container['customField39'] = isset($data['customField39']) ? $data['customField39'] : null;
        $this->container['customField40'] = isset($data['customField40']) ? $data['customField40'] : null;
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
    * Gets customField16
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField16()
    {
        return $this->container['customField16'];
    }

    /**
    * Sets customField16
    *
    * @param string|null $customField16 自定义字段
    *
    * @return $this
    */
    public function setCustomField16($customField16)
    {
        $this->container['customField16'] = $customField16;
        return $this;
    }

    /**
    * Gets customField17
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField17()
    {
        return $this->container['customField17'];
    }

    /**
    * Sets customField17
    *
    * @param string|null $customField17 自定义字段
    *
    * @return $this
    */
    public function setCustomField17($customField17)
    {
        $this->container['customField17'] = $customField17;
        return $this;
    }

    /**
    * Gets customField18
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField18()
    {
        return $this->container['customField18'];
    }

    /**
    * Sets customField18
    *
    * @param string|null $customField18 自定义字段
    *
    * @return $this
    */
    public function setCustomField18($customField18)
    {
        $this->container['customField18'] = $customField18;
        return $this;
    }

    /**
    * Gets customField19
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField19()
    {
        return $this->container['customField19'];
    }

    /**
    * Sets customField19
    *
    * @param string|null $customField19 自定义字段
    *
    * @return $this
    */
    public function setCustomField19($customField19)
    {
        $this->container['customField19'] = $customField19;
        return $this;
    }

    /**
    * Gets customField20
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField20()
    {
        return $this->container['customField20'];
    }

    /**
    * Sets customField20
    *
    * @param string|null $customField20 自定义字段
    *
    * @return $this
    */
    public function setCustomField20($customField20)
    {
        $this->container['customField20'] = $customField20;
        return $this;
    }

    /**
    * Gets customField21
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField21()
    {
        return $this->container['customField21'];
    }

    /**
    * Sets customField21
    *
    * @param string|null $customField21 自定义字段
    *
    * @return $this
    */
    public function setCustomField21($customField21)
    {
        $this->container['customField21'] = $customField21;
        return $this;
    }

    /**
    * Gets customField22
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField22()
    {
        return $this->container['customField22'];
    }

    /**
    * Sets customField22
    *
    * @param string|null $customField22 自定义字段
    *
    * @return $this
    */
    public function setCustomField22($customField22)
    {
        $this->container['customField22'] = $customField22;
        return $this;
    }

    /**
    * Gets customField23
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField23()
    {
        return $this->container['customField23'];
    }

    /**
    * Sets customField23
    *
    * @param string|null $customField23 自定义字段
    *
    * @return $this
    */
    public function setCustomField23($customField23)
    {
        $this->container['customField23'] = $customField23;
        return $this;
    }

    /**
    * Gets customField24
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField24()
    {
        return $this->container['customField24'];
    }

    /**
    * Sets customField24
    *
    * @param string|null $customField24 自定义字段
    *
    * @return $this
    */
    public function setCustomField24($customField24)
    {
        $this->container['customField24'] = $customField24;
        return $this;
    }

    /**
    * Gets customField25
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField25()
    {
        return $this->container['customField25'];
    }

    /**
    * Sets customField25
    *
    * @param string|null $customField25 自定义字段
    *
    * @return $this
    */
    public function setCustomField25($customField25)
    {
        $this->container['customField25'] = $customField25;
        return $this;
    }

    /**
    * Gets customField26
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField26()
    {
        return $this->container['customField26'];
    }

    /**
    * Sets customField26
    *
    * @param string|null $customField26 自定义字段
    *
    * @return $this
    */
    public function setCustomField26($customField26)
    {
        $this->container['customField26'] = $customField26;
        return $this;
    }

    /**
    * Gets customField27
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField27()
    {
        return $this->container['customField27'];
    }

    /**
    * Sets customField27
    *
    * @param string|null $customField27 自定义字段
    *
    * @return $this
    */
    public function setCustomField27($customField27)
    {
        $this->container['customField27'] = $customField27;
        return $this;
    }

    /**
    * Gets customField28
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField28()
    {
        return $this->container['customField28'];
    }

    /**
    * Sets customField28
    *
    * @param string|null $customField28 自定义字段
    *
    * @return $this
    */
    public function setCustomField28($customField28)
    {
        $this->container['customField28'] = $customField28;
        return $this;
    }

    /**
    * Gets customField29
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField29()
    {
        return $this->container['customField29'];
    }

    /**
    * Sets customField29
    *
    * @param string|null $customField29 自定义字段
    *
    * @return $this
    */
    public function setCustomField29($customField29)
    {
        $this->container['customField29'] = $customField29;
        return $this;
    }

    /**
    * Gets customField30
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField30()
    {
        return $this->container['customField30'];
    }

    /**
    * Sets customField30
    *
    * @param string|null $customField30 自定义字段
    *
    * @return $this
    */
    public function setCustomField30($customField30)
    {
        $this->container['customField30'] = $customField30;
        return $this;
    }

    /**
    * Gets customField31
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField31()
    {
        return $this->container['customField31'];
    }

    /**
    * Sets customField31
    *
    * @param string|null $customField31 自定义字段
    *
    * @return $this
    */
    public function setCustomField31($customField31)
    {
        $this->container['customField31'] = $customField31;
        return $this;
    }

    /**
    * Gets customField32
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField32()
    {
        return $this->container['customField32'];
    }

    /**
    * Sets customField32
    *
    * @param string|null $customField32 自定义字段
    *
    * @return $this
    */
    public function setCustomField32($customField32)
    {
        $this->container['customField32'] = $customField32;
        return $this;
    }

    /**
    * Gets customField33
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField33()
    {
        return $this->container['customField33'];
    }

    /**
    * Sets customField33
    *
    * @param string|null $customField33 自定义字段
    *
    * @return $this
    */
    public function setCustomField33($customField33)
    {
        $this->container['customField33'] = $customField33;
        return $this;
    }

    /**
    * Gets customField34
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField34()
    {
        return $this->container['customField34'];
    }

    /**
    * Sets customField34
    *
    * @param string|null $customField34 自定义字段
    *
    * @return $this
    */
    public function setCustomField34($customField34)
    {
        $this->container['customField34'] = $customField34;
        return $this;
    }

    /**
    * Gets customField35
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField35()
    {
        return $this->container['customField35'];
    }

    /**
    * Sets customField35
    *
    * @param string|null $customField35 自定义字段
    *
    * @return $this
    */
    public function setCustomField35($customField35)
    {
        $this->container['customField35'] = $customField35;
        return $this;
    }

    /**
    * Gets customField36
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField36()
    {
        return $this->container['customField36'];
    }

    /**
    * Sets customField36
    *
    * @param string|null $customField36 自定义字段
    *
    * @return $this
    */
    public function setCustomField36($customField36)
    {
        $this->container['customField36'] = $customField36;
        return $this;
    }

    /**
    * Gets customField37
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField37()
    {
        return $this->container['customField37'];
    }

    /**
    * Sets customField37
    *
    * @param string|null $customField37 自定义字段
    *
    * @return $this
    */
    public function setCustomField37($customField37)
    {
        $this->container['customField37'] = $customField37;
        return $this;
    }

    /**
    * Gets customField38
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField38()
    {
        return $this->container['customField38'];
    }

    /**
    * Sets customField38
    *
    * @param string|null $customField38 自定义字段
    *
    * @return $this
    */
    public function setCustomField38($customField38)
    {
        $this->container['customField38'] = $customField38;
        return $this;
    }

    /**
    * Gets customField39
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField39()
    {
        return $this->container['customField39'];
    }

    /**
    * Sets customField39
    *
    * @param string|null $customField39 自定义字段
    *
    * @return $this
    */
    public function setCustomField39($customField39)
    {
        $this->container['customField39'] = $customField39;
        return $this;
    }

    /**
    * Gets customField40
    *  自定义字段
    *
    * @return string|null
    */
    public function getCustomField40()
    {
        return $this->container['customField40'];
    }

    /**
    * Sets customField40
    *
    * @param string|null $customField40 自定义字段
    *
    * @return $this
    */
    public function setCustomField40($customField40)
    {
        $this->container['customField40'] = $customField40;
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

