<?php

return [
    'roles' => [
        'admins' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'],
                ['permission' => 'create', 'name' => 'create'],
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
             'name' => 'global.admins'
        ],
        'roles' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
     
            'name' => "global.roles"
        ],
        'centerTeam' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.center_member.title'
        ],

        'bookTeam' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.book_team.title'
        ],
        'about' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'update', 'name' => 'update']
            ],
            'name' => 'global.about.title'
        ],
  
        'versionCategory' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.version.categories'
        ],
        'versionNews' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.version.news'
        ],

        'activitesCategory' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.activity.categories'
        ],
        'activites' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.activity.news'
        ],
        'etmamCategory' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.etmam'
        ],
        'etmamNews' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.etmam_news'
        ],
        'mediaNews' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.media.news.title'
        ],
        'libraryPhoto' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.media.photo.title'
        ],
        'libraryVideo' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
                  'name' => 'global.media.video.title'
        ],
        'categoryLibraryPhoto' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
      
              'name' => 'global.media.video.categories'
        ],
        'rewaqTeam' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.rewaq.team.title'
        ],
        'RewaqBooks' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.rewaq.book.title'
        ],
        'rewaqPublishRule' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.rewaq.publish_rule'
           
        ],
         'rewaq' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.rewaq.rewaq_edit'
        ],
        'RewaMagazineTeam' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.magazine.team.title'
        ],
        'magazineblog' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.magazine.blog.title'
        ],
     
       
     
        'MagazineInfo' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.magazine.magazine_edit'
        ],
        'rewaqMagazineRules' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.magazine.publish_rule'
        ],
        'khetabmagazinemteam' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.khetab_magazine.team.title'
        ],
        'khetabmagazineedit' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.khetab_magazine.magazine_edit'
        ],
        'khetabmagazinerulesedit' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.khetab_magazine.publish_rule'
        ],
      
        'MEJEELPTeam' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.MEJEELP_magazine.team.title'
        ],
      
        'MEJEELPBlog' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.MEJEELP_magazine.blog.title'
        ],

        'MEJEELPMagazine' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.MEJEELP_magazine.magazine_edit'
        ],
        'MEJEELPMagazinerule' => [
            'permission' => [
                ['permission' => 'edit', 'name' => 'edit'], 
            ],
            'name' => 'global.MEJEELP_magazine.publish_rule'
        ],
        'events' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.event.title'
        ],
        'faqs' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.faq_title'
        ],
        'iraqMeter' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.iraqmeter.title'
        ],
        'konMedia' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.kone_media.title'
        ],
        'slider' => [
           'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.slider.title'
        ],
        'electronicsService' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'update', 'name' => 'update'],
            ],
            'name' => 'global.electronic.title'
        ],
        'newsLetter' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'update', 'name' => 'update'],
            ],
            'name' => 'global.newsletter.title'
        ],
        'backup' => [
           'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'create', 'name' => 'create'], 
                ['permission' => 'update', 'name' => 'update'], 
                ['permission' => 'delete', 'name' => 'delete']
            ],
            'name' => 'global.backup'
        ],
        'setting' => [
            'permission' => [
                ['permission' => 'read', 'name' => 'read'], 
                ['permission' => 'update', 'name' => 'update'],
            ],
            'name' => 'global.settings'
        ],
    ],
];
